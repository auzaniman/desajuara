<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
  <div class="container">
    {{-- <a class="navbar-brand mr-lg-5" href="">
      <img src="{{ url ('frontend/argon_theme/assets/img/brand/white.png')}}">
    </a> --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar_global">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="">
              Desajuara{{-- <img src="{{ url ('frontend/argon_theme/assets/img/brand/blue.png')}}"> --}}
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>

      {{-- Navigasi --}}
      <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <li class="nav-item dropdown">
          <a href="{{route('home')}}" class="nav-link" href="#" role="button">
            <i class="ni ni-ui-04 d-lg-none"></i>
            <span class="nav-link-inner--text font-weight-bold">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#desajuara" class="nav-link">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text font-weight-bold">Desajuara</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#fitur" class="nav-link">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text font-weight-bold">Fitur Unggulan</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#kontak" class="nav-link">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text font-weight-bold">Kontak Kami</span>
          </a>
        </li>
      </ul>

      {{-- Sosial Media --}}
      <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.facebook.com" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
            <i class="fa fa-facebook-square"></i>
            <span class="nav-link-inner--text d-lg-none">Facebook</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.instagram.com" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
            <i class="fa fa-instagram"></i>
            <span class="nav-link-inner--text d-lg-none">Instagram</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://twitter.com" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
            <i class="fa fa-twitter-square"></i>
            <span class="nav-link-inner--text d-lg-none">Twitter</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://wa.me/81225258383" target="_blank" data-toggle="tooltip" title="Contact us on Whatsapp">
            <i class="fa fa-whatsapp"></i>
            <span class="nav-link-inner--text d-lg-none">Whatsapp</span>
          </a>
        </li>

        @auth
        <li class="nav-item">
          <form action="{{url('logout')}}" method="POST">
            @csrf
            <button class="btn btn-danger btn-icon">
              <a>
                <span class="btn-inner--icon">
                  <i class="fa fa-sign-out"></i>
                </span>
                <span class="nav-link-inner--text">Keluar</span>
              </a>
            </button>
          </form>
        </li>
        @endauth

        @if (\Request::is('/'))
          @guest
          <li class="nav-item">
              <button class="btn btn-success btn-icon">
                <a href="{{route('register')}}" class="text-decoration-none text-reset">
                  <span class="btn-inner--icon">
                    <i class="fa fa-user-plus"></i>
                  </span>
                  <span class="nav-link-inner--text">Daftar</span>
                </a>
              </button>
          </li>
          @endguest
        @endif

        @if (\Request::is('login'))
          @guest
          <li class="nav-item">
              <button class="btn btn-success btn-icon">
                <a href="{{route('register')}}" class="text-decoration-none text-reset">
                  <span class="btn-inner--icon">
                    <i class="fa fa-user-plus"></i>
                  </span>
                  <span class="nav-link-inner--text">Daftar</span>
                </a>
              </button>
          </li>
          @endguest
        @endif

        @if (\Request::is('register'))
          @guest
          <li class="nav-item">
              <button class="btn btn-warning btn-icon">
                <a href="{{route('login')}}" class="text-decoration-none text-reset">
                  <span class="btn-inner--icon">
                    <i class="fa fa-sign-in"></i>
                  </span>
                  <span class="nav-link-inner--text">Masuk</span>
                </a>
              </button>
          </li>
          @endguest
        @endif

      </ul>
    </div>
  </div>
</nav>
