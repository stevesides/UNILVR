<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body style="margin:0px">
        @include('components.header')
        @yield('body')
        @include('components.footer')
    </body>
</html>
</html>
