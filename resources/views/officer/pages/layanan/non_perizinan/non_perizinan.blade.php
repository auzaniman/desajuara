@extends('officer.layouts.app')

@section('title')
Layanan
@endsection

@section('content')
<div class="dropdown mb-2">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Layanan Lain
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="{{route('officer.administrasi')}}">Bidang Administrasi</a></li>
    <li><a class="dropdown-item" href="{{route('officer.perizinan')}}">Bidang Perizinan</a></li>
    <li><a class="dropdown-item" href="{{route('officer.pertanahan')}}">Bidang Pertanahan</a></li>
  </ul>
</div>
<div class="row mb-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Pernyataan Waris</a>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Kelakuan Baik</a>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
              <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Pembuatan Keterangan Kawin/Belum Kawin</a>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
              <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a href="{{route('officer.sktm')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Tidak Mampu</a>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Kehilangan BPKB</a>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Pensiun</a>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a href="{{route('officer.supengdesa')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Pengantar Desa</a>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
              <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
            </div>
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
