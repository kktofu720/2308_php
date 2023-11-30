<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/common.css">
    <title>@yield('title', 'Laravel Portfolio')</title>
</head>
<body>
    @include('layout.header')
    @yield('main')
    @include('layout.footer')


</body>
</html>