<div class="section section-hero section-shaped">
  {{-- <div class="shape shape-style-3 shape-default">
    <span class="span-150"></span>
    <span class="span-50"></span>
    <span class="span-50"></span>
    <span class="span-75"></span>
    <span class="span-100"></span>
    <span class="span-75"></span>
    <span class="span-50"></span>
    <span class="span-100"></span>
    <span class="span-50"></span>
    <span class="span-100"></span>
  </div> --}}
  <div class="page-header">
    <div class="container shape-container d-flex align-items-center py-lg">
      <img src="{{url('frontend/assets/img/1.jpg')}}" class="img-hero" alt="">
      <div class="col px-0">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-12 text-center">
            <h1 class="text-white display-1">Aplikasi sahabat desa menuju era digital.</h1>
            <h2 class="display-3 font-weight-normal text-white">"Melihat lebih luas"</h2>
            <div class="btn-wrapper mt-4">
              @guest
              <a href="" class="btn btn-warning btn-icon mt-3 mb-sm-0" data-toggle="modal" data-target="#modal-form">
                <span class="btn-inner--icon"><i class="ni ni-button-power" style="font-size: 1rem"></i></span>
                <span class="btn-inner--text font-weight-bold" style="font-size: 1rem">Masuk</span>
              </a>
              @endguest
              @auth
              <a href="{{route('dashboard')}}" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                <span class="btn-inner--icon"><i class="ni ni-button-power" style="font-size: 1rem"></i></span>
                <span class="btn-inner--text font-weight-bold" style="font-size: 1rem">Dashboard</span>
              </a>
              @endauth
              <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-body p-0">
                      <div class="card bg-secondary shadow border-0 mb-0">
                        {{-- <div class="card-header bg-white pb-5">
                          <div class="text-muted text-center mb-3">
                            <small>Sign in with</small>
                          </div>
                          <div class="btn-wrapper text-center">
                            <a href="javascript:;" class="btn btn-neutral btn-icon">
                              <span class="btn-inner--icon">
                                <img src="./assets/img/icons/common/github.svg">
                              </span>
                              <span class="btn-inner--text">Github</span>
                            </a>
                            <a href="javascript:;" class="btn btn-neutral btn-icon">
                              <span class="btn-inner--icon">
                                <img src="./assets/img/icons/common/google.svg">
                              </span>
                              <span class="btn-inner--text">Google</span>
                            </a>
                          </div>
                        </div> --}}

                        {{-- Login Modal --}}
                        <div class="card-body px-lg-5 py-lg-5">
                          <div class="text-center text-muted mb-4">
                            Masuk
                          </div>
                          <form role="form" method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-3">
                              <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                              </div>
                            </div>
                            {{-- <div class="custom-control custom-control-alternative custom-checkbox">
                              <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                              <label class="custom-control-label" for=" customCheckLogin">
                                <span>Remember me</span>
                              </label>
                            </div> --}}
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary my-4">Masuk</button>
                            </div>
                          </form>
                        </div>
                        {{-- End Login Modal --}}

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
