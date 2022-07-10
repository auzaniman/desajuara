{{-- <div class="min-height-300 bg-primary position-absolute w-100"></div> --}}
{{-- <div class="position-absolute w-100 min-height-300" style="background-position-y: 50%;">
  <span class="mask bg-primary opacity-6"></span>
</div> --}}
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 z-index-1" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="" target="_blank">
      <img src="{{url('backend/assets/img/logo-ct-dark.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">Desajuara</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class=" w-auto ">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link
          @if (\Request::is('user'))
          active
          @endif"
          href="{{route('dashboard')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02  text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Profil Akun</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link
          @if (\Request::is('user/profile_desa'))
          active
          @endif"
          href="{{route('profile_desa')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-building text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Profil Desa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link
          @if (\Request::is('user/tdp'))
          active
          @endif" href="{{route('tantangan')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-app text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Tantangan dan Potensi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link
          @if (\Request::is('user/rjm'))
          active
          @endif" href="{{route('rencana')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Rencana Jangka Menengah</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link
          @if (\Request::is('user/agenda'))
          active
          @endif" href="{{route('agenda')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-calendar-grid-58 text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Agenda</span>
        </a>
      {{-- </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link
          @if (\Request::is('user/keuangan'))
          active
          @endif" href="{{route('keuangan')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-money-coins text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Keuangan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link
          @if (\Request::is('user/layanan'))
          active
          @endif" href="{{route('layanan')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-collection text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Layanan</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link
          @if (\Request::is('user/peta'))
          active
          @endif" href="{{route('peta')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-map-big text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Peta Desa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link
          @if (\Request::is('user/berkas'))
          active
          @endif" href="{{route('berkas')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-1 d-flex align-items-center justify-content-center">
            <i class="ni ni-archive-2 text-primary text-sm"></i>
          </div>
          <span class="nav-link-text ms-1">Berkas</span>
        </a>
      </li>
    </ul>
  </div>
  {{-- <div class="sidenav-footer mx-3 ">
    <div class="card card-plain shadow-none" id="sidenavCard">
      <img class="w-50 mx-auto" src="./assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration">
      <div class="card-body text-center p-3 w-100 pt-0">
        <div class="docs-info">
          <h6 class="mb-0">Need help?</h6>
          <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
        </div>
      </div>
    </div>
    <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
    <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
  </div> --}}
</aside>
