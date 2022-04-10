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
              <img src="{{ url ('frontend/argon_theme/assets/img/brand/blue.png')}}">
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
      <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <i class="ni ni-ui-04 d-lg-none"></i>
            <span class="nav-link-inner--text">Home</span>
          </a>
          <div class="dropdown-menu dropdown-menu-xl">
            <div class="dropdown-menu-inner">
              <a href="" class="media d-flex align-items-center">
                <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                  <i class="ni ni-spaceship"></i>
                </div>
                <div class="media-body ml-3">
                  <h6 class="heading text-primary mb-md-1">Mulai Jelajahi</h6>
                  <p class="description d-none d-md-inline-block mb-0"></p>
                </div>
              </a>
              <a href="" class="media d-flex align-items-center">
                <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                  <i class="ni ni-palette"></i>
                </div>
                <div class="media-body ml-3">
                  <h6 class="heading text-primary mb-md-1">Informasi</h6>
                  <p class="description d-none d-md-inline-block mb-0"></p>
                </div>
              </a>
              {{-- <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                  <i class="ni ni-ui-04"></i>
                </div>
                <div class="media-body ml-3">
                  <h5 class="heading text-warning mb-md-1">Components</h5>
                  <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components offered in the Free version.</p>
                </div>
              </a> --}}
            </div>
          </div>
        </li>
        {{-- <li class="nav-item dropdown">
          <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Examples</span>
          </a>
          <div class="dropdown-menu">
            <a href="" class="dropdown-item">Landing</a>
            <a href="" class="dropdown-item">Profile</a>
            <a href="" class="dropdown-item">Login</a>
            <a href="" class="dropdown-item">Register</a>
          </div>
        </li> --}}
      </ul>
      <ul class="navbar-nav align-items-lg-center ml-lg-auto">
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.facebook.com/CreativeTim/" target="_blank" data-toggle="tooltip" title="Like us on Facebook">
            <i class="fa fa-facebook-square"></i>
            <span class="nav-link-inner--text d-lg-none">Facebook</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
            <i class="fa fa-instagram"></i>
            <span class="nav-link-inner--text d-lg-none">Instagram</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="Follow us on Twitter">
            <i class="fa fa-twitter-square"></i>
            <span class="nav-link-inner--text d-lg-none">Twitter</span>
          </a>
        </li>

        @auth
        <li class="nav-item d-none d-lg-block">
          <a href="" target="_blank" class="btn btn-danger btn-icon">
            <span class="btn-inner--icon">
              <i class="fa fa-shopping-cart"></i>
            </span>
            <span class="nav-link-inner--text">Keluar</span>
          </a>
        </li>
        @endauth

      </ul>
    </div>
  </div>
</nav>
