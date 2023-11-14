<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Board')</title>
</head>
<body>
    @include('layout.header')
    @yield('main')
    @include('layout.footer')
</body>
</html>