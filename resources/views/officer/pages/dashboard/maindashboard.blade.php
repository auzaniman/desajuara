@extends('officer.layouts.app')

@section('title')
Dashboard
@endsection

@section('content')
{{-- Administrasi Kependudukan --}}
<h5>Total Pengajuan Bidang Administrasi Kependudukan</h5>
<div class="row mb-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Pembuatan/perubahan Kartu Keluarga</a>
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
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="{{route('officer.surdom')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Domisili</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">({{$surdom}})</span>
            </div>
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">{{$verifikasi_surdom}}</span>
              Terverifikasi
            </p>
            <p class="mb-0">
              <span class="text-warning text-sm font-weight-bolder me-1">{{$waiting_surdom}}</span>
              Waiting
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Pembuatan KTP</a>
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
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Pindah</a>
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
<div class="row mb-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Kelahiran</a>
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
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Kematian</a>
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
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Cerai</a>
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
{{-- End Administrasi Kependudukan --}}

{{-- Perizinan --}}
<h5>Total Pengajuan Bidang Perizinan</h5>
<div class="row mb-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
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
    <div class="card h-100">
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
    <div class="card h-100">
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
    <div class="card h-100">
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
{{-- End Perizinan --}}

{{-- Non Perizinan --}}
<h5>Total Pengajuan Bidang Non Perizinan</h5>
<div class="row mb-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Pernyataan Waris</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Kelakuan Baik</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Pembuatan Keterangan Kawin/Belum Kawin</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="{{route('officer.sktm')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Tidak Mampu</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">({{$sktm}})</span>
            </div>
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">{{$verifikasi_sktm}}</span>
              Terverifikasi
            </p>
            <p class="mb-0">
              <span class="text-warning text-sm font-weight-bolder me-1">{{$waiting_sktm}}</span>
              Waiting
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Kehilangan BPKB</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Keterangan Pensiun</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="{{route('officer.supengdesa')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Surat Pengantar Desa</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">({{$supengdesa}})</span>
            </div>
            <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">{{$verifikasi_supengdesa}}</span>
              Terverifikasi
            </p>
            <p class="mb-0">
              <span class="text-warning text-sm font-weight-bolder me-1">{{$waiting_supengdesa}}</span>
              Waiting
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Non Perizinan --}}

{{-- Pertanahan --}}
<h5>Total Pengajuan Bidang Pertanahan</h5>
<div class="row mb-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Permohonan Pembuatan Surat Garapan</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">()</span>
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
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Permohonan Pengajuan Sertifikat Tanah</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">()</span>
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
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Permohonan Surat Keterangan Kepemilikan Lahan</a> <span class="text-sm mb-0 text-uppercase font-weight-bold">()</span>
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
{{-- End Pertanahan --}}

@endsection
