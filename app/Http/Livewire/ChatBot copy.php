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
            Log::error('Google Generative AI Error: ' . $e->getMessage());
            $this->messages[] = [
                'text' => 'Sorry, the AI service is unavailable. Please try again later.',
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
            throw new \Exception('Missing Google Cloud API Key.');
        }

        $client = new Client();

        // Updated endpoint for Generative Language API (as of 2025, verify with Google documentation)
        $url = "https://generativelanguage.googleapis.com/v1/models/gemini-1.5-flash:generateContent?key={$apiKey}";

        $payload = [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $message]
                    ]
                ]
            ],
            'generationConfig' => [
                'temperature' => 0.7,
                'maxOutputTokens' => 256,
            ],
        ];

        try {
            $response = $client->post($url, [
                'json' => $payload,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]);

            $body = json_decode($response->getBody()->getContents(), true);
            Log::debug('Google Generative AI Response: ', $body);

            // Adjust based on the response structure for gemini-1.5-flash
            return $body['candidates'][0]['content']['parts'][0]['text'] ?? 'No response from Generative AI';
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            Log::error('Google Generative AI Request Failed: ' . $e->getMessage());
            throw $e;
        }
    }

    public function render()
    {
        return view('livewire.chat-bot');
    }
}
