<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Anniversary 2 years</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('css/my.css')}}" rel="stylesheet">
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        @yield('css')

    </head>
    <body>
        @yield('content')
        <div id="app">
            <stories></stories>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        @yield('js')
    </body>
</html>
