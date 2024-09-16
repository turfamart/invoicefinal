<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 
    </head>
    <body>
        <div id="app">
            <h1>This is Git Test</h1>
             <h2>This is Git Test</h2>
             <h3>This is from development branch</h3>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
 
    </body>
</html>
