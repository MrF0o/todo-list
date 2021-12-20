<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env("APP_NAME")}}</title>
        
        <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600|Open+Sans:400,600;display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Open Sans', sans-serif;
            }
        </style>
    
    </head>
    <body class="antialiased">

        <div id="app">
            <app></app>
        </div>

        <script src="{{mix('js/app.js')}}"></script>
    </body>
</html>
