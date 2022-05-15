<!DOCTYPE html>
<html lang="en">
<head>
  @include('superuser.components.meta')
  @include('superuser.components.style')
  <title>
  @yield('title')
  </title>
</head>
<body class="g-sidenav-show   bg-gray-100">
  @include('superuser.components.sidebar')
  @yield('content')
  {{-- @include('superuser.components.plugin') --}}
  @include('superuser.components.script')
</body>
</html>
