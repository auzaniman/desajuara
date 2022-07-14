<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('home.components.meta')
  @include('home.components.style')
  <title>
   @yield('title')
  </title>
</head>
<body class="index-page">
  @include('home.components.navbar')
  @yield('content')
  @include('home.components.footer')
  @include('home.components.script')

  @stack('script_regist')
</body>
</html>
