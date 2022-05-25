@extends('superuser.layouts.app')

@section('title')
Profil Akun
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    {{-- Avatar --}}
    <div class="card">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              {{-- <img src="{{url('backend/assets/img/team-1.jpg')}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm"> --}}
              <div class="w-100 border-radius-lg shadow-sm bg-gradient-primary h-100"></div>
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{Auth::user()->name}}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                {{Auth::user()->email}}
              </p>
            </div>
          </div>
          {{-- <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-email-83"></i>
                    <span class="ms-2">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    {{-- End Avatar --}}
  </div>
</div>
<div class="row mt-4">
    {{-- Detail Profile --}}
  <div class="col-md-8">
    <div class="card">
      {{-- <div class="card-header pb-0">
        <div class="d-flex align-items-center">
          <p class="mb-0">Edit Profile</p>
          <button class="btn btn-primary btn-sm ms-auto">Settings</button>
        </div>
      </div> --}}
      <div class="card-body">
        <p class="text-uppercase text-sm">Informasi User</p>
        <form action="">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Username</label>
                <input class="form-control" type="text" value="{{$user->username}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Email address</label>
                <input class="form-control" type="email" value="{{$user->email}}">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">Biodata</p>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">NIK</label>
                <input class="form-control" type="text" value="{{$user->nik}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">No KK</label>
                <input class="form-control" type="text" value="{{$user->kk}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">No NPWP</label>
                <input class="form-control" type="text" value="{{$user->npwp}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama</label>
                <input class="form-control" type="text" value="{{$user->name}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Tempat Tanggal Lahir</label>
                <input class="form-control" type="text" value="{{$user->ttl}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                <input class="form-control" type="text" value="{{$user->kelamin}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Agama</label>
                <input class="form-control" type="text" value="{{$user->agama}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Status Perkawinan</label>
                <input class="form-control" type="text" value="{{$user->perkawinan}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Kewarganegaraan</label>
                <input class="form-control" type="text" value="{{$user->kewarganegaraan}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Pekerjaan</label>
                <input class="form-control" type="text" value="{{$user->pekerjaan}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Pendidikan</label>
                <input class="form-control" type="text" value="{{$user->pendidikan}}">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">Kontak</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Alamat KTP</label>
                <input class="form-control" type="text" value="{{$user->alamat_ktp}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Alamat Domisili</label>
                <input class="form-control" type="text" value="{{$user->alamat_domisili}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Provinsi</label>
                <input class="form-control" type="text" value="{{$user->provinsi}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Kota/Kabupaten</label>
                <input class="form-control" type="text" value="{{$user->kota}}">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Kecamatan</label>
                <input class="form-control" type="text" value="{{$user->kecamatan}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">No Telpon</label>
                <input class="form-control" type="text" value="{{$user->no_telpon}}">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">No Whatsapp</label>
                <input class="form-control" type="text" value="{{$user->no_wa}}">
              </div>
            </div>
          </div>
          {{-- <hr class="horizontal dark"> --}}
          {{-- <p class="text-uppercase text-sm">About me</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">About me</label>
                <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
              </div>
            </div>
          </div> --}}
          {{-- <div class="d-flex align-items-center mt-3">
            <button type="submit" class="btn btn-primary btn-sm ms-auto">Update</button>
          </div> --}}
        </form>
      </div>
    </div>
  </div>
  {{-- End Detail Profile --}}
  <div class="col-md-4">
    <div class="card card-profile">
      <img src="{{url('backend/assets/img/bg-profile.jpg')}}" alt="Image placeholder" class="card-img-top">
      <div class="row justify-content-center">
        <div class="col-4 col-lg-4 order-lg-2">
          <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
            <a href="javascript:;">
              <img src="{{url('frontend/assets/img/user.jpg')}}" class="rounded-circle img-fluid border border-2 border-white">
            </a>
          </div>
        </div>
      </div>
      {{-- <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
        <div class="d-flex justify-content-between">
          <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
          <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
          <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
          <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
        </div>
      </div> --}}
      <div class="card-body pt-0">
        {{-- <div class="row">
          <div class="col">
            <div class="d-flex justify-content-center">
              <div class="d-grid text-center">
                <span class="text-lg font-weight-bolder">22</span>
                <span class="text-sm opacity-8">Friends</span>
              </div>
              <div class="d-grid text-center mx-4">
                <span class="text-lg font-weight-bolder">10</span>
                <span class="text-sm opacity-8">Photos</span>
              </div>
              <div class="d-grid text-center">
                <span class="text-lg font-weight-bolder">89</span>
                <span class="text-sm opacity-8">Comments</span>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="text-center mt-4">
          <div class="h6 font-weight-300">
            <i class="ni location_pin mr-2"></i>{{Auth::user()->kota}}, {{Auth::user()->kecamatan}}
          </div>
          <div class="h6 mt-4">
            <i class="ni business_briefcase-24 mr-2"></i>Wiraswasta
          </div>
          <div>
            <i class="ni education_hat mr-2"></i>Programmer Web Developer
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
