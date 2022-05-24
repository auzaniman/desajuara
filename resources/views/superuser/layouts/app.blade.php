<!DOCTYPE html>
<html lang="en">
<head>
  @include('superuser.components.meta')
  @include('superuser.components.style')
  <title>
  @yield('title')
  </title>
</head>
<body class="g-sidenav-show bg-gray-200">
  @include('superuser.components.sidebar')

  <main class="main-content position-relative border-radius-lg ">
    @include('superuser.components.topbar')
    <div class="container-fluid py-3">
      {{-- Alert --}}
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      @if (session('status'))
      <div class="alert alert-success text-white" role="alert">
          {{ session('status') }}
      </div>
      @endif
      {{-- End Alert --}}

      {{-- Main Content --}}
      @yield('content')
      {{-- End Main Content --}}

      @include('superuser.components.footer')
    </div>
  </main>

  {{-- @include('superuser.components.plugin') --}}
  @include('superuser.components.script')
  @stack('chart')
  @stack('calendar')
</body>
</html>
