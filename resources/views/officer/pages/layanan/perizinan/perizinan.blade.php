@extends('officer.layouts.app')

@section('title')
Bidang Perizinan
@endsection

@section('content')
<div class="dropdown mb-2">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Layanan Lain
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="{{route('officer.administrasi')}}">Bidang Administrasi</a></li>
    <li><a class="dropdown-item" href="{{route('officer.non_perizinan')}}">Bidang Non Perizinan</a></li>
    <li><a class="dropdown-item" href="{{route('officer.pertanahan')}}">Bidang Pertanahan</a></li>
  </ul>
</div>
<div class="row mb-sm-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="{{route('officer.suketusaha')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Usaha</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">({{$sktm}})</span>
            </div>
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">{{$verifikasi_suketusaha}}</span>
              Terverifikasi
            </p>
            <p class="mb-0">
              <span class="text-warning text-sm font-weight-bolder me-1">{{$waiting_suketusaha}}</span>
              Waiting
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Domisili Usaha</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">({{$sktm}})</span>
            </div>
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">0</span>
              Terverifikasi
            </p>
            <p class="mb-0">
              <span class="text-warning text-sm font-weight-bolder me-1">0</span>
              Waiting
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Izin Mendirikan Bangunan</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">({{$sktm}})</span>
            </div>
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">0</span>
              Terverifikasi
            </p>
            <p class="mb-0">
              <span class="text-warning text-sm font-weight-bolder me-1">0</span>
              Waiting
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat izin Keramaian</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">({{$sktm}})</span>
            </div>
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">0</span>
              Terverifikasi
            </p>
            <p class="mb-0">
              <span class="text-warning text-sm font-weight-bolder me-1">0</span>
              Waiting
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<a href="{{route('officer.layanan')}}" class="btn btn-warning btn-icon">
  <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
  <span class="btn-inner--text text-white">Kembali</span>
</a>
@endsection
