</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('Pagetitle', 'Dashboard')</title>

    {{-- Include your CSS/JS links --}}
    @include('layouts.links')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500 h-screen" dir="ltr">

    {{-- Sidebar (always on the left) --}}
    @include('layouts.ltr.main-sidebar')

    {{-- Main Content --}}
    <main id="main-content" class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">

        {{-- Navbar (LTR only) --}}
        @include('layouts.ltr.main-header')

        {{-- Page Content --}}
        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                @yield('Content')
                @livewire('chat-bot')

            </div>
            <div class="mx-auto sm:px-6 lg:px-8">
                @livewire('chat-bot')

            </div>
        </div>

        {{-- Footer --}}
        @include('layouts.ltr.footer')
    </main>

    {{-- Footer Scripts --}}
    @include('layouts.footer-scripts')
</body>

</html>