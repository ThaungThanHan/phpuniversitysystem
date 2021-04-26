<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>School Website</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">    <!-- linking to the base css file -->
    </head>
    <body>
        <div id="react">
        
        </div>

        <script src="{{ asset('js/app.js') }}"></script>            <!-- Linking to the base js file -->
    </body>
    </html>