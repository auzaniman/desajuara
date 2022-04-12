<!DOCTYPE html>
<html lang="en">
<head>
  @include('dashboard.components.meta')
  @include('dashboard.components.style')
  <title>
  @yield('title')
  </title>
</head>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @include('dashboard.components.sidebar')
  @yield('content')
  @include('dashboard.components.plugin')
  @include('dashboard.components.script')
</body>
</html>
