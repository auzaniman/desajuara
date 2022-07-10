@extends('superuser.layouts.app')

@section('title')
Bidang Perizinan
@endsection

@section('content')
<div class="dropdown mb-2">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Layanan Lain
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="{{route('administrasi')}}">Bidang Administrasi Kependudukan</a></li>
    <li><a class="dropdown-item" href="{{route('non_perizinan')}}">Bidang Non Perizinan</a></li>
    <li><a class="dropdown-item" href="{{route('pertanahan')}}">Bidang Pertanahan</a></li>
  </ul>
</div>
<div class="row mb-sm-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <a href="{{route('suketusaha')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Usaha</a>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Domisili Usaha</a>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Izin Mendirikan Bangunan</a>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Izin Keramaian</a>
      </div>
    </div>
  </div>
</div>
<a href="{{route('layanan')}}" class="btn btn-warning btn-icon">
  <span class="btn-inner--icon"><i class="ni ni-bold-left text-white"></i></span>
  <span class="btn-inner--text text-white">Kembali</span>
</a>
@endsection
