<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- title --> 
    <title>@yield('title')</title>
    <style>
        .active{ color: red;}
    </style>
</head>
<body>
      <!-- header -->
      @include('layouts.partials.header')
    <!-- content -->
    @yield('content')
    <!-- footer -->
    @include('layouts.partials.footer')
</body>
</html>