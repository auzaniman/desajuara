@extends('users.layouts.app')

@section('title')
Desa Pintar
@endsection

@section('content')
<div class="wrapper">
  <div class="section section-hero section-shaped">
    <div class="shape shape-style-1 shape-primary">
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
    </div>
    <div class="page-header">
      <div class="container shape-container d-flex align-items-center py-lg">
        <div class="col px-0">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="./assets/img/brand/white.png" style="width: 200px;" class="img-fluid">
              <p class="lead text-white">A beautiful Design System for Bootstrap 4. It's Free and Open Source.</p>
              <div class="btn-wrapper mt-5">
                <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                  <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                  <span class="btn-inner--text">Download HTML</span>
                </a>
                <a href="https://github.com/creativetimofficial/argon-design-system" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                  <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                  <span class="btn-inner--text"><span class="text-warning">Star us</span> on Github</span>
                </a>
              </div>
              <div class="mt-5">
                <small class="font-weight-bold mb-0 mr-2 text-white">*proudly coded by</small>
                <img src="./assets/img/brand/creativetim-white-slim.png" style="height: 28px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
      <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </div>
  <div class="section section-components pb-0" id="section-components">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <!-- Basic elements -->
          <h2 class="mb-5">
            <span>Basic Elements</span>
          </h2>
          <!-- Buttons -->
          <h3 class="h4 text-success font-weight-bold mb-4">Buttons</h3>
          <!-- Button colors -->
          <div class="mb-3 mt-5">
            <small class="text-uppercase font-weight-bold">Pick your color</small>
          </div>
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-default">Default</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <div class="mb-3 mt-5">
            <small class="text-uppercase font-weight-bold">Rounded</small>
          </div>
          <button type="button" class="btn btn-primary btn-round">Primary</button>
          <button type="button" class="btn btn-info btn-round">Info</button>
          <button type="button" class="btn btn-success btn-round">Success</button>
          <button type="button" class="btn btn-danger btn-round">Danger</button>
          <button type="button" class="btn btn-warning btn-round">Warning</button>
          <button type="button" class="btn btn-default btn-round">Default</button>
          <button type="button" class="btn btn-secondary btn-round">Secondary</button>
          <div class="mb-3 mt-5">
            <small class="text-uppercase font-weight-bold">Outline</small>
          </div>
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-outline-info">Info</button>
          <button type="button" class="btn btn-outline-success">Success</button>
          <button type="button" class="btn btn-outline-danger">Danger</button>
          <button type="button" class="btn btn-outline-warning">Warning</button>
          <button type="button" class="btn btn-outline-default">Default</button>
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          <div class="mb-3 mt-5">
            <small class="text-uppercase font-weight-bold">Outline Rounded</small>
          </div>
          <button type="button" class="btn btn-outline-primary btn-round">Primary</button>
          <button type="button" class="btn btn-outline-info btn-round">Info</button>
          <button type="button" class="btn btn-outline-success btn-round">Success</button>
          <button type="button" class="btn btn-outline-danger btn-round">Danger</button>
          <button type="button" class="btn btn-outline-warning btn-round">Warning</button>
          <button type="button" class="btn btn-outline-default btn-round">Default</button>
          <button type="button" class="btn btn-outline-secondary btn-round">Secondary</button>
          <!-- Button links -->
          <div class="mb-3 mt-5">
            <small class="text-uppercase font-weight-bold">Links</small>
          </div>
          <button type="button" class="btn btn-link text-primary">Primary</button>
          <button type="button" class="btn btn-link text-info">Info</button>
          <button type="button" class="btn btn-link text-success">Success</button>
          <button type="button" class="btn btn-link text-danger">Danger</button>
          <button type="button" class="btn btn-link text-warning">Warning</button>
          <button type="button" class="btn btn-link text-default">Default</button>
          <button type="button" class="btn btn-link text-secondary">Secondary</button>
          <!-- Button styles -->
          <div>
            <div class="mb-3 mt-5">
              <small class="text-uppercase font-weight-bold">Pick your style</small>
            </div>
            <button class="btn btn-primary" type="button">Button</button>
            <button class="btn btn-icon btn-3 btn-primary" type="button">
              <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
              <span class="btn-inner--text">Left icon</span>
            </button>
            <button class="btn btn-icon btn-3 btn-primary" type="button">
              <span class="btn-inner--text">Right icon</span>
              <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
            </button>
            <button class="btn btn-icon btn-primary" type="button">
              <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
            </button>
            <!-- Button sizes -->
            <div class="mb-3 mt-5">
              <small class="text-uppercase font-weight-bold">Pick your size</small>
            </div>
            <button class="btn btn-sm btn-primary" type="button">Small</button>
            <button class="btn btn-1 btn-primary" type="button">Regular</button>
            <button class="btn btn-lg btn-primary" type="button">Large Button</button>
            <div class="mb-3 mt-5">
              <small class="text-uppercase font-weight-bold">Floating</small>
            </div>
            <button class="btn btn-sm btn-primary btn-icon-only rounded-circle" type="button">
              <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
            </button>
            <button class="btn btn-primary btn-icon-only rounded-circle" type="button">
              <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
            </button>
            <button class="btn btn-lg btn-primary btn-icon-only rounded-circle" type="button">
              <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
            </button>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="mb-3 mt-5">
                <small class="text-uppercase font-weight-bold">Active & Disabled</small>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <button class="btn btn-primary btn-block active" type="button">Active</button>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-primary btn-block disabled" type="button">Disabled</button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3 mt-5">
                <small class="text-uppercase font-weight-bold">Block Level</small>
              </div>
              <div class="row">
                <button class="btn btn-primary btn-block" type="button">Primary</button>
                <button class="btn btn-info btn-block" type="button">Info</button>
              </div>
            </div>
          </div>
          <!-- Back to top button -->
          <button class="btn btn-primary btn-icon-only back-to-top" type="button" name="button">
            <i class="ni ni-bold-up"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="section pb-0 section-components">
    <div class="container mb-5">
      <!-- Inputs -->
      <h3 class="h4 text-success font-weight-bold mb-4">Inputs</h3>
      <div class="mb-3">
        <small class="text-uppercase font-weight-bold">Form controls</small>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="form-group">
            <input type="text" placeholder="Regular" class="form-control" />
          </div>
          <div class="form-group">
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="form-group">
            <input type="text" placeholder="Regular" class="form-control" disabled />
          </div>
          <div class="form-group">
            <div class="input-group mb-4">
              <input class="form-control" placeholder="Birthday" type="text">
              <div class="input-group-append">
                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="form-group has-success">
            <input type="text" placeholder="Success" class="form-control is-valid" />
          </div>
          <div class="form-group has-danger">
            <input type="email" placeholder="Error Input" class="form-control is-invalid" />
          </div>
        </div>
      </div>
    </div>
    <div class="py-5 bg-secondary">
      <div class="container">
        <!-- Inputs (alternative) -->
        <div class="mb-3">
          <small class="text-uppercase font-weight-bold">Form controls (alternative)</small>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="form-group">
              <input type="text" placeholder="Regular" class="form-control form-control-alternative" />
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="form-group">
              <input type="text" placeholder="Regular" class="form-control form-control-alternative " disabled />
            </div>
            <div class="form-group">
              <div class="input-group input-group-alternative mb-4">
                <input class="form-control" placeholder="Birthday" type="text">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="form-group has-success">
              <input type="text" placeholder="Success" class="form-control form-control-alternative is-valid" />
            </div>
            <div class="form-group has-danger">
              <input type="email" placeholder="Error Input" class="form-control form-control-alternative is-invalid" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <!-- Custom controls -->
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <!-- Checkboxes -->
          <div class="mb-3">
            <small class="text-uppercase font-weight-bold">Checkboxes</small>
          </div>
          <div class="custom-control custom-checkbox mb-3">
            <input class="custom-control-input" id="customCheck1" type="checkbox">
            <label class="custom-control-label" for="customCheck1">
              <span>Unchecked</span>
            </label>
          </div>
          <div class="custom-control custom-checkbox mb-3">
            <input class="custom-control-input" id="customCheck2" type="checkbox" checked>
            <label class="custom-control-label" for="customCheck2">
              <span>Checked</span>
            </label>
          </div>
          <div class="custom-control custom-checkbox mb-3">
            <input class="custom-control-input" id="customCheck3" type="checkbox" disabled>
            <label class="custom-control-label" for="customCheck3">
              <span>Disabled Unchecked</span>
            </label>
          </div>
          <div class="custom-control custom-checkbox mb-3">
            <input class="custom-control-input" id="customCheck4" type="checkbox" checked disabled>
            <label class="custom-control-label" for="customCheck4">
              <span>Disabled Checked</span>
            </label>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
          <!-- Radio buttons -->
          <div class="mb-3">
            <small class="text-uppercase font-weight-bold">Radios</small>
          </div>
          <div class="custom-control custom-radio mb-3">
            <input name="custom-radio-1" class="custom-control-input" id="customRadio1" type="radio">
            <label class="custom-control-label" for="customRadio1">
              <span>Unchecked</span>
            </label>
          </div>
          <div class="custom-control custom-radio mb-3">
            <input name="custom-radio-1" class="custom-control-input" id="customRadio2" checked type="radio">
            <label class="custom-control-label" for="customRadio2">
              <span>Checked</span>
            </label>
          </div>
          <div class="custom-control custom-radio mb-3">
            <input name="custom-radio-2" class="custom-control-input" id="customRadio3" disabled type="radio">
            <label class="custom-control-label" for="customRadio3">
              <span>Disabled unchecked</span>
            </label>
          </div>
          <div class="custom-control custom-radio mb-3">
            <input name="custom-radio-2" class="custom-control-input" id="customRadio4" checked disabled type="radio">
            <label class="custom-control-label" for="customRadio4">
              <span>Disabled checkbox</span>
            </label>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
          <!-- Toggle buttons -->
          <div class="mb-3">
            <small class="text-uppercase font-weight-bold">Toggle buttons</small>
          </div><label class="custom-toggle">
            <input type="checkbox">
            <span class="custom-toggle-slider rounded-circle"></span>
          </label>
          <span class="clearfix"></span>
          <label class="custom-toggle">
            <input type="checkbox" checked>
            <span class="custom-toggle-slider rounded-circle"></span>
          </label>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
          <div class="mb-3">
            <small class="text-uppercase font-weight-bold">Sliders</small>
          </div>
          <!-- Simple slider -->
          <div class="input-slider-container">
            <div id="sliderRegular" class="slider"></div>
            <br>
            <div id="sliderDouble" class="slider slider-primary"></div>
          </div>
          <!-- Range slider -->
          <div class="mt-5">
            <!-- Range slider container -->
            <div id="input-slider-range" data-range-value-min="100" data-range-value-max="500"></div>
            <!-- Range slider values -->
            <div class="row d-none">
              <div class="col-6">
                <span class="range-slider-value value-low" data-range-value-low="200" id="input-slider-range-value-low"></span>
              </div>
              <div class="col-6 text-right">
                <span class="range-slider-value value-high" data-range-value-high="400" id="input-slider-range-value-high"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mt-md">
        <div class="col-lg-12">
          <!-- Menu -->
          <h3 class="h4 text-success font-weight-bold mb-4">Menu</h3>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">With text</small>
              </div>
              <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
                <div class="container">
                  <a class="navbar-brand" href="javascript:;">Menu</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-inner-primary" aria-controls="nav-inner-primary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="nav-inner-primary">
                    <div class="navbar-collapse-header">
                      <div class="row">
                        <div class="col-6 collapse-brand">
                          <a href="./index.html">
                            <img src="./assets/img/brand/blue.png">
                          </a>
                        </div>
                        <div class="col-6 collapse-close">
                          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-inner-primary" aria-controls="nav-inner-primary" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="navbar-nav ml-lg-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:;">Discover
                          <span class="sr-only">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:;">Profile</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:;" id="nav-inner-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                        <div class="dropdown-menu" aria-labelledby="nav-inner-primary_dropdown_1">
                          <a class="dropdown-item" href="javascript:;">Action</a>
                          <a class="dropdown-item" href="javascript:;">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="javascript:;">Something else here</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">With icons</small>
              </div>
              <nav class="navbar navbar-expand-lg navbar-dark bg-success rounded">
                <div class="container">
                  <a class="navbar-brand" href="javascript:;">Menu</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-inner-success" aria-controls="nav-inner-success" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="nav-inner-success">
                    <div class="navbar-collapse-header">
                      <div class="row">
                        <div class="col-6 collapse-brand">
                          <a href="./index.html">
                            <img src="./assets/img/brand/blue.png">
                          </a>
                        </div>
                        <div class="col-6 collapse-close">
                          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-inner-success" aria-controls="nav-inner-success" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="navbar-nav ml-lg-auto">
                      <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="javascript:;">
                          <i class="ni ni-favourite-28"></i>
                          <span class="nav-link-inner--text d-lg-none">Discover</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="javascript:;">
                          <i class="ni ni-notification-70"></i>
                          <span class="nav-link-inner--text d-lg-none">Profile</span>
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link-icon" href="javascript:;" id="nav-inner-success_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="ni ni-settings-gear-65"></i>
                          <span class="nav-link-inner--text d-lg-none">Settings</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-inner-success_dropdown_1">
                          <a class="dropdown-item" href="javascript:;">Action</a>
                          <a class="dropdown-item" href="javascript:;">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="javascript:;">Something else here</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section section-navbars">
    <div class="container">
      <!-- Navigation -->
      <h2 class="mb-5">
        <span>Navbars</span>
      </h2>
    </div>
    <!-- Navbar default -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-default">
      <div class="container">
        <a class="navbar-brand" href="javascript:;">Default Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="./assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="ni ni-favourite-28"></i>
                <span class="nav-link-inner--text d-lg-none">Discover</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="ni ni-notification-70"></i>
                <span class="nav-link-inner--text d-lg-none">Profile</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link nav-link-icon dropdown-toggle" href="javascript:;" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-settings-gear-65"></i>
                <span class="nav-link-inner--text d-lg-none">Settings</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                <a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar primary -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-4">
      <div class="container">
        <a class="navbar-brand" href="javascript:;">Primary Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-primary">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="./assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Discover
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:;">Profile</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="javascript:;" id="navbar-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-primary_dropdown_1">
                <a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar success -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success mt-4">
      <div class="container">
        <a class="navbar-brand" href="javascript:;">Success Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-success" aria-controls="navbar-success" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-success">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="./assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-success" aria-controls="navbar-success" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="ni ni-favourite-28"></i>
                <span class="nav-link-inner--text d-lg-none">Favorites</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text d-lg-none">Another action</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link nav-link-icon dropdown-toggle" href="javascript:;" id="navbar-success_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-settings-gear-65"></i>
                <span class="nav-link-inner--text d-lg-none">Settings</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-success_dropdown_1">
                <a class="dropdown-item" href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar danger -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger mt-4">
      <div class="container">
        <a class="navbar-brand" href="javascript:;">Danger Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-danger" aria-controls="navbar-danger" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-danger">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="./assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-danger" aria-controls="navbar-danger" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-twitter"></i>
                <span class="nav-link-inner--text d-lg-none">Twitter</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-google-plus"></i>
                <span class="nav-link-inner--text d-lg-none">Google +</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text d-lg-none">Instagram</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar warning -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning mt-4">
      <div class="container">
        <a class="navbar-brand" href="javascript:;">Warning Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-warning" aria-controls="navbar-warning" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-warning">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="./assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-warning" aria-controls="navbar-warning" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text d-lg-none">Share</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-twitter"></i>
                <span class="nav-link-inner--text d-lg-none">Tweet</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-pinterest"></i>
                <span class="nav-link-inner--text d-lg-none">Pin</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar info -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info mt-4">
      <div class="container">
        <a class="navbar-brand" href="javascript:;">Info Color</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-info">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="./assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-info" aria-controls="navbar-info" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-facebook-square"></i>
                <span class="nav-link-inner--text">Facebook</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-twitter"></i>
                <span class="nav-link-inner--text">Twitter</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="javascript:;">
                <i class="fa fa-instagram"></i>
                <span class="nav-link-inner--text">Instagram</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="section section-components">
    <div class="container">
      <h3 class="h4 text-success font-weight-bold mb-4">Tabs</h4>
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <!-- Tabs with icons -->
            <div class="mb-3">
              <small class="text-uppercase font-weight-bold">With icons</small>
            </div>
            <div class="nav-wrapper">
              <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Messages</a>
                </li>
              </ul>
            </div>
            <div class="card shadow">
              <div class="card-body">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                    <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0">
            <!-- Menu -->
            <div class="mb-3">
              <small class="text-uppercase font-weight-bold">With text</small>
            </div>
            <div class="nav-wrapper">
              <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false">Messages</a>
                </li>
              </ul>
            </div>
            <div class="card shadow">
              <div class="card-body">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                    <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                    <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-grid justify-content-between align-items-center mt-lg">
          <div class="col-lg-5">
            <h3 class="h4 text-success font-weight-bold mb-4">Progress bars</h3>
            <div class="progress-wrapper">
              <div class="progress-info">
                <div class="progress-label">
                  <span>Task completed</span>
                </div>
                <div class="progress-percentage">
                  <span>40%</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-default" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
              </div>
            </div>
            <div class="progress-wrapper">
              <div class="progress-info">
                <div class="progress-label">
                  <span>Task completed</span>
                </div>
                <div class="progress-percentage">
                  <span>60%</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <h3 class="h4 text-success font-weight-bold mb-5">Pagination</h3>
            <nav aria-label="Page navigation example" class="mb-4">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="javascript:;">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="javascript:;">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;">5</a>
                </li>
              </ul>
            </nav>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="javascript:;"><i class="fa fa-angle-left"></i></a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="javascript:;">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="javascript:;"><i class="fa fa-angle-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="row row-grid justify-content-between">
          <div class="col-lg-5">
            <h3 class="h4 text-success font-weight-bold mb-5">Navigation Pills</h3>
            <ul class="nav nav-pills nav-pills-circle mb-3" id="tabs_2" role="tablist">
              <li class="nav-item">
                <a class="nav-link rounded-circle active" id="home-tab" data-toggle="tab" href="#tabs_2_1" role="tab" aria-controls="home" aria-selected="true">
                  <span class="nav-link-icon d-block"><i class="ni ni-atom"></i></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabs_2_2" role="tab" aria-controls="profile" aria-selected="false">
                  <span class="nav-link-icon d-block"><i class="ni ni-chat-round"></i></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabs_2_3" role="tab" aria-controls="contact" aria-selected="false">
                  <span class="nav-link-icon d-block"><i class="ni ni-cloud-download-95"></i></span>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-5">
            <h3 class="h4 text-success font-weight-bold mb-5">Labels</h3>
      </h3>
      <span class="badge badge-pill badge-default text-uppercase">Default</span>
      <span class="badge badge-pill badge-primary text-uppercase">Primary</span>
      <span class="badge badge-pill badge-success text-uppercase">Success</span>
      <span class="badge badge-pill badge-danger text-uppercase">Danger</span>
      <span class="badge badge-pill badge-warning text-uppercase">Warning</span>
      <span class="badge badge-pill badge-info text-uppercase">Info</span>
    </div>
  </div>
  <h3 class="h4 text-success font-weight-bold mb-4 mt-5">Alerts</h3>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
    <span class="alert-inner--text"><strong>Info!</strong> This is an info alert—check it out!</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
    <span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="ni ni-support-16"></i></span>
    <span class="alert-inner--text"><strong>Danger!</strong> This is an error alert—check it out!</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

<!-- Typography -->
<div class="section section-typography">
  <div class="container">
    <h2 class="mt-lg mb-5">
      <span>Typography</span>
    </h2>
    <h3 class="h4 text-success font-weight-bold">Headings</h3>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Heading 1</small>
      </div>
      <div class="col-sm-9">
        <h1 class="mb-0">Argon Design System PRO</h1>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Heading 2</small>
      </div>
      <div class="col-sm-9">
        <h2 class="mb-0">Argon Design System PRO</h2>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Heading 3</small>
      </div>
      <div class="col-sm-9">
        <h3 class="mb-0">Argon Design System PRO</h3>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Heading 4</small>
      </div>
      <div class="col-sm-9">
        <h4 class="mb-0">Argon Design System PRO</h4>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Heading 5</small>
      </div>
      <div class="col-sm-9">
        <h5 class="mb-0">Argon Design System PRO</h5>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Heading 6</small>
      </div>
      <div class="col-sm-9">
        <h6 class="mb-0">Argon Design System PRO</h6>
      </div>
    </div>
    <!-- Display titles -->
    <h3 class="h4 text-success font-weight-bold mt-md">Display titles</h3>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Display 1</small>
      </div>
      <div class="col-sm-9">
        <h1 class="display-1 mb-0">Argon Design System PRO</h1>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Display 2</small>
      </div>
      <div class="col-sm-9">
        <h2 class="display-2 mb-0">Argon Design System PRO</h2>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Display 3</small>
      </div>
      <div class="col-sm-9">
        <h3 class="display-3 mb-0">Argon Design System PRO</h3>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Display 4</small>
      </div>
      <div class="col-sm-9">
        <h4 class="display-4 mb-0">Argon Design System PRO</h4>
      </div>
    </div>
    <!-- Specialized titles -->
    <h3 class="h4 text-success font-weight-bold mt-md">Specialized titles</h3>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Heading</small>
      </div>
      <div class="col-sm-9">
        <h3 class="heading mb-0">Argon Design System PRO</h3>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Heading title</small>
      </div>
      <div class="col-sm-9">
        <h3 class="heading-title text-warning mb-0">Argon Design System PRO</h3>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Heading seaction</small>
      </div>
      <div class="col-sm-9">
        <div>
          <h2 class="display-3">Header with small subtitle </h2>
          <p class="lead text-muted">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record maximum.</p>
        </div>
      </div>
    </div>
    <!-- Paragraphs -->
    <h3 class="h4 text-success font-weight-bold mt-md">Paragraphs</h3>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Paragraph</small>
      </div>
      <div class="col-sm-9">
        <p>I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Lead text</small>
      </div>
      <div class="col-sm-9">
        <p class="lead">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Quote</small>
      </div>
      <div class="col-sm-9">
        <blockquote class="blockquote">
          <p class="mb-0">I always felt like I could do anything. That’s the main thing people are controlled by!</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Muted text</small>
      </div>
      <div class="col-sm-9">
        <p class="text-muted mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Primary text</small>
      </div>
      <div class="col-sm-9">
        <p class="text-primary">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Info text</small>
      </div>
      <div class="col-sm-9">
        <p class="text-info mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Success text</small>
      </div>
      <div class="col-sm-9">
        <p class="text-success mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Warning text</small>
      </div>
      <div class="col-sm-9">
        <p class="text-warning mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
      </div>
    </div>
    <div class="row py-3 align-items-center">
      <div class="col-sm-3">
        <small class="text-uppercase text-muted font-weight-bold">Danger text</small>
      </div>
      <div class="col-sm-9">
        <p class="text-danger mb-0">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
      </div>
    </div>
    <!-- Images -->
    <h2 class="mt-lg mb-5">
      <span>Images</span>
    </h2>
    <div class="row">
      <div class="col-sm-3 col-6">
        <small class="d-block text-uppercase font-weight-bold mb-4">Image</small>
        <img src="./assets/img/faces/team-1.jpg" alt="Rounded image" class="img-fluid rounded shadow" style="width: 150px;">
      </div>
      <div class="col-sm-3 col-6">
        <small class="d-block text-uppercase font-weight-bold mb-4">Circle Image</small>
        <img src="./assets/img/faces/team-2.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 150px;">
      </div>
      <div class="col-sm-3 col-6 mt-5 mt-sm-0">
        <small class="d-block text-uppercase font-weight-bold mb-4">Raised</small>
        <img src="./assets/img/faces/team-3.jpg" alt="Raised image" class="img-fluid rounded shadow-lg" style="width: 150px;">
      </div>
      <div class="col-sm-3 col-6 mt-5 mt-sm-0">
        <small class="d-block text-uppercase font-weight-bold mb-4">Circle Raised</small>
        <img src="./assets/img/faces/team-4.jpg" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 150px;">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-sm-3 col-6">
        <small class="d-block text-uppercase font-weight-bold mb-4">Avatar group</small>
        <div class="avatar-group">
          <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
            <img alt="Image placeholder" src="./assets/img/faces/team-1.jpg">
          </a>
          <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Romina Hadid">
            <img alt="Image placeholder" src="./assets/img/faces/team-2.jpg">
          </a>
          <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Alexander Smith">
            <img alt="Image placeholder" src="./assets/img/faces/team-3.jpg">
          </a>
          <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-original-title="Jessica Doe">
            <img alt="Image placeholder" src="./assets/img/faces/team-4.jpg">
          </a>
        </div>
      </div>
      <div class="col-sm-6 col-6">
        <small class="d-block text-uppercase font-weight-bold mb-4">Sizing</small>
        <a href="javascript:;" class="avatar avatar-xs rounded-circle">
          <img alt="Image placeholder" src="./assets/img/faces/team-4.jpg">
        </a>
        <a href="javascript:;" class="avatar avatar-sm rounded-circle">
          <img alt="Image placeholder" src="./assets/img/faces/team-4.jpg">
        </a>
        <a href="javascript:;" class="avatar rounded-circle">
          <img alt="Image placeholder" src="./assets/img/faces/team-4.jpg">
        </a>
        <a href="javascript:;" class="avatar avatar-lg rounded-circle">
          <img alt="Image placeholder" src="./assets/img/faces/team-4.jpg">
        </a>
        <a href="javascript:;" class="avatar avatar-xl rounded-circle">
          <img alt="Image placeholder" src="./assets/img/faces/team-4.jpg">
        </a>
      </div>
    </div>
  </div>
</div>
<div class="section section-js-components">
  <div class="container">
    <h2 class="mt-lg mb-5">
      <span>Javascript Components</span>
    </h2>
    <h3 class="h4 text-success font-weight-bold mb-4">Modals</h3>
    <!-- Modals -->
    <div class="row">
      <div class="col-md-4">
        <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#modal-default">Default</button>
        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Type your modal title</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button>
        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
          <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">
              <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="py-3 text-center">
                  <i class="ni ni-bell-55 ni-3x"></i>
                  <h4 class="heading mt-4">You should read this!</h4>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-white">Ok, Got it</button>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <button type="button" class="btn btn-block btn-default mb-3" data-toggle="modal" data-target="#modal-form">Form</button>
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0 mb-0">
                  <div class="card-header bg-white pb-5">
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
                  </div>
                  <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                      <small>Or sign in with credentials</small>
                    </div>
                    <form role="form">
                      <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control" placeholder="Email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control" placeholder="Password" type="password">
                        </div>
                      </div>
                      <div class="custom-control custom-control-alternative custom-checkbox">
                        <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                        <label class="custom-control-label" for=" customCheckLogin">
                          <span>Remember me</span>
                        </label>
                      </div>
                      <div class="text-center">
                        <button type="button" class="btn btn-primary my-4">Sign in</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Datepicker -->
    <h3 class="h4 text-success font-weight-bold mt-md mb-4">Datepicker</h3>
    <div class="row">
      <div class="col-md-4">
        <small class="d-block text-uppercase font-weight-bold mb-3">Single date</small>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
            </div>
            <input class="flatpickr flatpickr-input form-control" type="text" placeholder="Select Date..">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <small class="d-block text-uppercase font-weight-bold mb-3">Date range</small>
        <div class="input-daterange">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
              </div>
              <input class="flatpickr range form-control" type="text" placeholder="Range">
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <small class="d-block text-uppercase font-weight-bold mb-3">DateTimePicker</small>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
            </div>
            <input class="flatpickr datetimepicker form-control" type="text" placeholder="Datetimepicker">
          </div>
        </div>
      </div>
    </div>
    <!-- Tooltips and Popovers -->
    <div class="row tooltips-popovers">
      <div class="col-lg-6">
        <h3 class="h4 text-success font-weight-bold mt-md mb-4">Tooltips</h3>
        <small class="d-block text-uppercase font-weight-bold mb-3">Colors</small>
        <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">Primary</button>
        <button type="button" class="btn btn-sm btn-info btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">Info</button>
        <button type="button" class="btn btn-sm btn-success btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">Success</button>
        <button type="button" class="btn btn-sm btn-warning btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">Warning</button>
        <button type="button" class="btn btn-sm btn-danger btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">Danger</button>
        <button type="button" class="btn btn-sm btn-default btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">Default</button>
        <button type="button" class="btn btn-sm btn-secondary btn-tooltip" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom" data-container="body" data-animation="true">Secondary</button>
        <br /><br />
        <small class="d-block text-uppercase font-weight-bold mb-3">Position</small>
        <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="left" title="Tooltip on left" data-container="body" data-animation="true" data-delay="100">On left</button>
        <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">On top</button>
        <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom" data-container="body" data-animation="true">On bottom</button>
        <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="right" title="Tooltip on right" data-container="body" data-animation="true">On right</button>
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <h3 class="h4 text-success font-weight-bold mt-md mb-4">Popovers</h3>
        <small class="d-block text-uppercase font-weight-bold mb-3">Colors</small>
        <button type="button" class="btn btn-sm btn-primary" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Primary</button>
        <button type="button" class="btn btn-sm btn-info" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Info</button>
        <button type="button" class="btn btn-sm btn-success" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Success</button>
        <button type="button" class="btn btn-sm btn-warning" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Warning</button>
        <button type="button" class="btn btn-sm btn-danger" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Danger</button>
        <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Default</button>
        <button type="button" class="btn btn-sm btn-secondary" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Secondary</button>
        <br /><br />
        <small class="d-block text-uppercase font-weight-bold mb-3">Position</small>
        <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover On Left" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On left</button>
        <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On top</button>
        <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Right" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On right</button>
        <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Bottom" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On bottom</button>
      </div>
    </div>
  </div>
</div>
<div class="section" style="background-image: url('./assets/img/ill/1.svg');">
  <div class="container py-md">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 mb-lg-auto">
        <div class="rounded overflow-hidden transform-perspective-left">
          <div id="carousel_example" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
              <li data-target="#carousel_example" data-slide-to="1"></li>
              <li data-target="#carousel_example" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img-fluid" src="./assets/img/theme/img-1-1200x1000.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="./assets/img/theme/img-2-1200x1000.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="./assets/img/theme/img-1-1200x1000.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-5 mb-5 mb-lg-0">
        <h1 class="font-weight-light">Bootstrap carousel</h1>
        <p class="lead mt-4">Argon Design System comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
        <a href="https://demos.creative-tim.com/argon-design-system/docs/components/carousel.html" class="btn btn-white mt-4">See all components</a>
      </div>
    </div>
  </div>
</div>
<div class="section section-lg section-nucleo-icons pb-250">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="display-3">Nucleo Icons</h2>
        <p class="lead">
          The official package contains over 21.000 icons which are looking great in combination with Argon Design System. Make sure you check all of them and use those that you like the most.
        </p>
        <div class="btn-wrapper">
          <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/icons.html" class="btn btn-primary">View demo icons</a>
          <a href="https://nucleoapp.com/?ref=1712" target="_blank" rel="nofollow" class="btn btn-default mt-3 mt-md-0">View all icons</a>
        </div>
      </div>
    </div>
    <div class="blur--hover">
      <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/icons.html" rel="nofollow">
        <div class="icons-container blur-item mt-5 on-screen" data-toggle="on-screen">
          <!-- Center -->
          <i class="icon ni ni-diamond"></i>
          <!-- Right 1 -->
          <i class="icon icon-sm ni ni-album-2"></i>
          <i class="icon icon-sm ni ni-app"></i>
          <i class="icon icon-sm ni ni-atom"></i>
          <!-- Right 2 -->
          <i class="icon ni ni-bag-17"></i>
          <i class="icon ni ni-bell-55"></i>
          <i class="icon ni ni-credit-card"></i>
          <!-- Left 1 -->
          <i class="icon icon-sm ni ni-briefcase-24"></i>
          <i class="icon icon-sm ni ni-building"></i>
          <i class="icon icon-sm ni ni-button-play"></i>
          <!-- Left 2 -->
          <i class="icon ni ni-calendar-grid-58"></i>
          <i class="icon ni ni-camera-compact"></i>
          <i class="icon ni ni-chart-bar-32"></i>
        </div>
        <span class="blur-hidden h5 text-success">Eplore all the 21.000+ Nucleo Icons</span>
      </a>
    </div>
  </div>
</div>
<section class="section section-lg section-shaped">
  <div class="shape shape-style-1 shape-default">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="container py-md">
    <div class="row row-grid justify-content-between align-items-center">
      <div class="col-lg-6">
        <h3 class="display-3 text-white">A beautiful Design System<span class="text-white">completed with examples</span></h3>
        <p class="lead text-white">The Design System comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful Bootstrap 4 Design System.</p>
        <div class="btn-wrapper">
          <a href="./examples/login.html" class="btn btn-success">Login Page</a>
          <a href="./examples/register.html" class="btn btn-white">Register Page</a>
        </div>
      </div>
      <div class="col-lg-5 mb-lg-auto">
        <div class="transform-perspective-right">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-white pb-5">
              <div class="text-muted text-center mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="./assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="./assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or sign in with credentials</small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group focused">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin2" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin2"><span>Remember me</span></label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SVG separator -->
  <div class="separator separator-bottom separator-skew">
    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>
</section>
<section class="section section-lg">
  <div class="container">
    <div class="row row-grid justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="display-3">Do you love this awesome <span class="text-success">Design System for Bootstrap 4?</span></h2>
        <p class="lead">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim where you can find the Design System in HTML. Start a new project or give an old Bootstrap project a new look!</p>
        <div class="btn-wrapper">
          <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-primary mb-3 mb-sm-0">Download HTML</a>
          <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-default">Download PSD/Sketch</a>
        </div>
        <div class="text-center">
          <h4 class="display-4 mb-5 mt-5">Available on these technologies</h4>
          <div class="row justify-content-center">
            <div class="col-lg-2 col-4">
              <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Bootstrap 4 - Most popular front-end component library">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/bootstrap.jpg" class="img-fluid">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://www.creative-tim.com/product/vue-argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Vue.js - The progressive javascript framework">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/vue.jpg" class="img-fluid">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://www.creative-tim.com/product/argon-design-system-angular" target="_blank" data-toggle="tooltip" data-original-title="Angular - One framework. Mobile &amp; desktop">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/angular.jpg" class="img-fluid">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://www.creative-tim.com/product/argon-design-system-react" target="_blank" data-toggle="tooltip" data-original-title="React - A JavaScript library for building user interfaces">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/react.jpg" class="img-fluid">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://www.creative-tim.com/product/argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Sketch - Digital design toolkit">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/sketch.jpg" class="img-fluid">
              </a>
            </div>
            <div class="col-lg-2 col-4">
              <a href=" https://www.creative-tim.com/product/argon-design-system" target="_blank" data-toggle="tooltip" data-original-title="Adobe Photoshop - Software for digital images manipulation">
                <img src="https://s3.amazonaws.com/creativetim_bucket/tim_static_images/presentation-page/ps.jpg" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
