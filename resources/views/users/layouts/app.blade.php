<!DOCTYPE html>
<html lang="en">

<head>
  @include('users.components.meta')
  @include('users.components.style')
  <title>
   @yield('title')
  </title>
</head>
<body class="index-page">
  @include('users.components.navbar')
  @yield('content')
  @include('users.components.footer')
  @include('users.components.script')
</body>
</html>
