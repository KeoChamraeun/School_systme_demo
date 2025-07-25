<?php

namespace App\Http\Livewire;

use Livewire\Component;
use OpenAI;
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
            Log::error('OpenAI Error: ' . $e->getMessage());
            $this->messages[] = [
                'text' => "⚠️ Error: " . $e->getMessage(),
                'type' => 'bot',
                'timestamp' => now()->toDateTimeString(),
            ];
        }

        $this->isLoading = false;
        $this->currentMessage = '';
    }

    private function getAiResponse($message)
    {
        $apiKey = env('OPENAI_API_KEY');

        if (empty($apiKey)) {
            throw new \Exception("Missing OpenAI API Key.");
        }

        $client = OpenAI::client($apiKey);

        $response = $client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful school assistant.'],
                ['role' => 'user', 'content' => $message]
            ],
            'temperature' => 0.7,
        ]);

        return $response->choices[0]->message->content;
    }

    public function render()
    {
        return view('livewire.chat-bot');
    }
}
