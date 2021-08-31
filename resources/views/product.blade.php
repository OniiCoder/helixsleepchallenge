<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Peter - Helix Sleep Challenge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">

        <link href="{{ secure_url('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style> -->
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
    </head>
    <body class="bg-custom-gray">
        <div id="app">
            <product-component></product-component>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
