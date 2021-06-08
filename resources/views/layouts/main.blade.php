<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Favicon --}}
        <link rel="shortcut-icon" href="{{ asset('favicon.ico') }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        {{-- Main css link --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        {{-- Window title --}}
        <title>@yield('head-title', 'DC-Comics')</title>
    </head>
    <body class="flex flex-column justify-between">
        {{-- Header --}}
        @include('partials.header')

        {{-- Main --}}
        <main class="flex-grow">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')

        
        {{-- JS --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>