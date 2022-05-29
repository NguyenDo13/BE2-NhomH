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
     <h1>include header here</h1>
     @show
     @section('body')
          <h1>custom body here</h1>
     @show
     @section('footer')
     <h1>include footer here</h1>
     @show
     @yield('js')
</body>
</html>