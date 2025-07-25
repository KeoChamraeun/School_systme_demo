<div class="chat-container"
    x-data="{
        showChat: @entangle('showChat'),
        init() {
            this.$watch('showChat', value => {
                if (value) {
                    this.$nextTick(() => {
                        const el = this.$refs.chatMessages;
                        el.scrollTop = el.scrollHeight;
                    });
                }
            });
        }
    }"
    style="position: fixed; bottom: 20px; right: 20px; width: 350px; font-family: Arial, sans-serif; z-index: 9999;">

    <!-- Chat Toggle Button -->
    <button @click="showChat = !showChat" class="chat-toggle"
        style="background: #4CAF50; color: white; padding: 10px 15px; border-radius: 5px; border: none; cursor: pointer; width: 100%;">
        Chat Assistant
    </button>

    <!-- Chat Window -->
    <div x-show="showChat" x-transition
        style="background: white; border: 1px solid #ccc; border-radius: 5px; margin-top: 10px; max-height: 400px; display: flex; flex-direction: column;">

        <!-- Header -->
        <div
            style="background: #4CAF50; color: white; padding: 10px; font-weight: bold; display: flex; justify-content: space-between; align-items: center;">
            <span>SchoolSys Assistant</span>
            <button @click="showChat = false"
                style="background: transparent; border: none; color: white; font-size: 20px; cursor: pointer;">×</button>
        </div>

        <!-- Messages -->
        <div x-ref="chatMessages"
            style="padding: 10px; overflow-y: auto; flex-grow: 1; max-height: 300px;">
            @foreach ($messages as $message)
            <div
                style="margin-bottom: 10px; text-align: {{ $message['type'] === 'user' ? 'right' : 'left' }};">
                <div
                    style="display: inline-block; background: {{ $message['type'] === 'user' ? '#DCF8C6' : '#F1F0F0' }}; padding: 8px 12px; border-radius: 15px; max-width: 80%;">
                    {{ $message['text'] }}
                </div>
                <div style="font-size: 10px; color: #888;">
                    {{ \Carbon\Carbon::parse($message['timestamp'])->diffForHumans() }}
                </div>
            </div>
            @endforeach

            @if ($isLoading)
            <div style="font-style: italic; color: #555;">Bot is typing...</div>
            @endif
        </div>

        <!-- Input Form -->
        <form wire:submit.prevent="sendMessage" style="display: flex; border-top: 1px solid #ccc;">
            <input type="text" wire:model.defer="currentMessage"
                placeholder="Ask about classes, schedules, or assignments..."
                style="flex-grow: 1; padding: 10px; border: none; border-radius: 0 0 0 5px;" autocomplete="off" />
            <button type="submit"
                style="background: #4CAF50; border: none; color: white; padding: 10px 15px; cursor: pointer; border-radius: 0 0 5px 0;">
                Send
            </button>
        </form>
    </div>
</div>