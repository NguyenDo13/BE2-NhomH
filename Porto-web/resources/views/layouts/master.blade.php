<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    @yield('css')
</head>

<body>
    @section('header')
        @include('clients.modules.header')
    @show
    @section('body')
        <h1>custom body here</h1>
    @show
    @section('footer')
        @include('clients.modules.module-12')
    @show
    @yield('js')
</body>

</html>
