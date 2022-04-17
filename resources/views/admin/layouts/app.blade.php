<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.components.meta')
  @include('admin.components.style')
  <title>
  @yield('title')
  </title>
</head>
<body class="g-sidenav-show   bg-gray-100">
  @include('admin.components.sidebar')
  @yield('content')
  {{-- @include('admin.components.plugin') --}}
  @include('admin.components.script')
</body>
</html>
