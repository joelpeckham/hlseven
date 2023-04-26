<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    {{-- Styles --}}
    @vite('resources/css/app.css')
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    @livewireStyles

    {{-- Scripts --}}
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- Alpine JS only needed for bladewind datepicker and timepicker --}}
</head>

<body>
    <livewire:nav />

    <div class="container">
        @yield('content')
    </div>

    @livewireScripts
</body>

</html>
