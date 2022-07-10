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
      <div class="alert alert-danger text-white">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
          <li><strong>{{ $error }}</strong></li>
          @endforeach
        </ul>
      </div>
      @endif

      @if (session('status'))
      <div class="alert text-white alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>{{ session('status') }}</strong></span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
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
  @stack('chart_keuangan')
  @stack('chart_dashboard')
  @stack('calendar')
</body>
</html>
