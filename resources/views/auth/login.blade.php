<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-lime-50 to-cyan-100">

        <div class="w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 items-center p-4 md:p-8">

            <!-- Left Side: Image and Title -->
            <div class="flex flex-col items-center justify-center">
                <!-- Replace with your own image -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="Login Illustration" class="mb-6">
                <h1 class="text-dark text-3xl font-bold mb-2"> </h1>
            </div>

            <!-- Right Side: Login Form -->
            <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-lg shadow-xl p-8 w-full">
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <x-label for="email" value="Your email" class="text-dark" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <x-label for="password" value="Password" class="text-dark" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mb-4">
                        <x-checkbox id="remember_me" name="remember" />
                        <label for="remember_me" class="ml-2 text-sm text-dark">Remember me</label>
                    </div>

                    <!-- Login Button -->
                    <div class="flex justify-center">
                        <button type="submit" class="bg-black text-white px-8 py-2 rounded hover:bg-gray-900 uppercase text-sm tracking-wider">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>