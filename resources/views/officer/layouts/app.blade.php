<!DOCTYPE html>
<html lang="en">
<head>
  @include('officer.components.meta')
  @include('officer.components.style')
  <title>
  @yield('title')
  </title>
</head>
<body class="g-sidenav-show bg-gray-200">
  @include('officer.components.sidebar')

  <main class="main-content position-relative border-radius-lg ">
    @include('officer.components.topbar')
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

      @include('officer.components.footer')
    </div>
  </main>

  {{-- @include('officer.components.plugin') --}}
  @include('officer.components.script')
  @stack('chart')
  @stack('calendar')
</body>
</html>
