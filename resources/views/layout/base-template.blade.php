<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $description ?? '' }}" />

    <link rel="canonical" href="{{ URL::current() }}" />

    <title>{{ trim($title).' | Keys.lol' }}</title>

    @stack('head')

    <link rel="icon" type="image/png" href="/favicon.png" />

    <link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}" />

    @if(App::environment('production'))
        {{-- google analytics goes here --}}
    @endif

</head>
<body class="bg-grey-lighter">

    {{-- Purge css hack --}}
    {{-- <div class="hidden wallet loading empty used"></div> --}}


    @include('layout.header')

    <div id="app" class="container mx-auto p-2">
        @yield('content')
    </div>

    @include('layout.footer')

    <script type="text/javascript" src="{{ mix('js/scripts.js') }}"></script>

    @stack('footer')

</body>
</html>