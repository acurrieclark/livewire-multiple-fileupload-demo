<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
@endif

<!-- Fonts -->


    <!-- Styles -->

    @livewireStyles

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
@yield('content')

@livewireScripts
</body>
</html>
