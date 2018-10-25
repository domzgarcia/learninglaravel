<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'DomzG Playground')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('site/css/bootstrap4/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/bootstrap4/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/bootstrap4/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
        <!-- Styles -->
    </head>
    
    <body>  
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/">About</a>
            </li>
        </ul>
        @yield('content')
    </body>
</html>

https://laracasts.com/series/laravel-from-scratch-2018/episodes/5?autoplay=true