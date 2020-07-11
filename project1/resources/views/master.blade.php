<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/input.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
</head>
    <body>
        @yield('header')
        @yield('content')
        @yield('footer')
    </body>
</html>
