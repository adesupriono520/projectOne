<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master</title>
</head>
    <body>
        @yield('header')
        @yield('content')
        @yield('footer')
    </body>
</html>
