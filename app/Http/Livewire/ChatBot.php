<?php

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class ChatBot extends Component
{
    public $messages = [];
    public $currentMessage = '';
    public $isLoading = false;
    public $showChat = false;

    protected $rules = [
        'currentMessage' => 'required|min:1|max:500'
    ];

    public function toggleChat()
    {
        $this->showChat = !$this->showChat;
    }

    public function sendMessage()
    {
        $this->validate();

        // Add user message
        $this->messages[] = [
            'text' => $this->currentMessage,
            'type' => 'user',
            'timestamp' => now()->toDateTimeString(),
        ];

        $this->isLoading = true;

        try {
            $response = $this->getAiResponse($this->currentMessage);

            $this->messages[] = [
                'text' => $response,
                'type' => 'bot',
                'timestamp' => now()->toDateTimeString(),
            ];
        } catch (\Exception $e) {
            Log::error('Google Gemini API Error: ' . $e->getMessage());
            $this->messages[] = [
                'text' => "⚠️ Error: " . $e->getMessage(),
                'type' => 'bot',
                'timestamp' => now()->toDateTimeString(),
            ];
        }

        $this->isLoading = false;
        $this->currentMessage = '';
    }

    private function getAiResponse(string $message): string
    {
        $apiKey = env('GOOGLE_CLOUD_API_KEY');

        if (empty($apiKey)) {
            throw new \Exception("Missing Google Cloud API Key.");
        }

        $client = new Client();

        $url = "https://generativelanguage.googleapis.com/v1beta2/models/text-bison-001:generateText?key={$apiKey}";

        $payload = [
            'prompt' => ['text' => $message],
            'temperature' => 0.7,
            'maxTokens' => 256,
        ];

        $response = $client->post($url, [
            'json' => $payload,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);

        $body = json_decode($response->getBody()->getContents(), true);

        return $body['candidates'][0]['output'] ?? 'No response from Gemini API';
    }

    public function render()
    {
        return view('livewire.chat-bot');
    }
}
