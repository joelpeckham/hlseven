<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HL7</title>

    {{-- Styles --}}
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    @livewireStyles

    {{-- Scripts --}}
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- Alpine JS only needed for bladewind datepicker and timepicker --}}
</head>

<body class="antialiased">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <livewire:main-hl7 />
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
