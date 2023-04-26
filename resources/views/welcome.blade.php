<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HL7</title>

        @livewireStyles
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
