<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebForce Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link href="{{ mix("css/app.css") }}" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>
    <body>
        <div id="app">
            <div class="container">
                <app></app>
            </div>
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script> 
    </body>
</html>
