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
    style="position: fixed; bottom: 20px; right: 20px; z-index: 9999; font-family: 'Segoe UI', sans-serif;">

    <!-- Floating Robot Icon Button -->
    <!-- Floating Robot Icon Button -->
    <button @click="showChat = !showChat"
        style="width: 64px; height: 64px; background: white; border: none; border-radius: 50%; padding: 0; box-shadow: 0 4px 10px rgba(0,0,0,0.2); cursor: pointer;">
        <img src="/assets/img/robot-icon.jpeg" alt="Chatbot Icon" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
    </button>


    <!-- Chat Window -->
    <div x-show="showChat" x-transition
        style="width: 350px; max-width: 90vw; background: white; border-radius: 12px; margin-top: 10px; box-shadow: 0 10px 15px rgba(0,0,0,0.15); display: flex; flex-direction: column; overflow: hidden;">

        <!-- Header -->
        <div
            style="background: #0d9488; color: white; padding: 14px; font-weight: bold; display: flex; justify-content: space-between; align-items: center;">
            <span>SchoolSys Assistant</span>
            <button @click="showChat = false"
                style="background: none; border: none; color: white; font-size: 22px; cursor: pointer;">×</button>
        </div>

        <!-- Chat Messages -->
        <div x-ref="chatMessages"
            style="padding: 12px; overflow-y: auto; flex-grow: 1; max-height: 320px; background-color: #f9fafb;">
            @foreach ($messages as $message)
            <div style="margin-bottom: 10px; text-align: {{ $message['type'] === 'user' ? 'right' : 'left' }};">
                <div style="display: inline-block; background: {{ $message['type'] === 'user' ? '#d1fae5' : '#e5e7eb' }}; padding: 10px 14px; border-radius: 18px; max-width: 80%; font-size: 14px;">
                    {{ $message['text'] }}
                </div>
                <div style="font-size: 10px; color: #6b7280; margin-top: 4px;">
                    {{ \Carbon\Carbon::parse($message['timestamp'])->diffForHumans() }}
                </div>
            </div>
            @endforeach

            @if ($isLoading)
            <div style="font-style: italic; color: #6b7280;">Bot is typing...</div>
            @endif
        </div>

        <!-- Input Form -->
        <form wire:submit.prevent="sendMessage" style="display: flex; border-top: 1px solid #e5e7eb;">
            <input type="text" wire:model.defer="currentMessage"
                placeholder="Ask about classes, schedules, or assignments..."
                style="flex-grow: 1; padding: 12px; border: none; font-size: 14px;" autocomplete="off" />
            <button type="submit"
                style="background: #0d9488; border: none; color: white; padding: 12px 16px; cursor: pointer;">
                ➤
            </button>
        </form>
    </div>
</div>