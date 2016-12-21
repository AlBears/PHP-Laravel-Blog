<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{URL::to('/css/main.css')}}">
  <title>@yield('title')</title>
  @yield('styles')
</head>
<body>
  @include('includes.header')
  <div class="main">
    @yield('content')
  </div>
  @include('includes.footer')
</body>
</html>
