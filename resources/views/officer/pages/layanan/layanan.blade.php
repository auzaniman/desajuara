@extends('officer.layouts.app')

@section('title')
Layanan
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize">Layanan</h6>
        <p class="mb-3">
          Fitur layanan ini bertujuan untuk mengefisiensikan pelayananan bagi masyarakat dalam hal administrasi. Ketika user mau mengajukan pelayanan administrasi, user akan mengisi pertanyaan yang ada di kolom di dalam fitur tersebut seperti mengisi kuisioner melalui google form. Setelah submit, data tersebut akan masuk ke dalam computer kampung dan petugas dapat segera memprosesnya dengan mengcopy-paste hasil isian user. Di dalam computer petugas, informasi yang masuk setelah user submit adalah data yang diiisi oleh user, tanggal (otomatis), dan nomer surat (otomatis). Adapun layanan default yang tersedia adalah surat kependudukan (pengajuan kk, ktp, mutasi, dll); perizinan (izin acara, pengajian, dll), keterangan desa (tidak mampu, domisili, usaha, dll), pelaporan (prestasi maupun kegaduhan), kritik dan saran.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-8">
            <div class="numbers">
              <a href="{{route('officer.administrasi')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Administrasi Kependudukan</a>
              <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">{{$administrasi}}</span>
              Total
              </p>
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
              <a href="{{route('officer.perizinan')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Bidang Perizinan</a>
              <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">{{$perizinan}}</span>
              Total
              </p>
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
              <a href="{{route('officer.non_perizinan')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Bidang Non Perizinan</a>
              <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">{{$nonperizinan}}</span>
              Total
              </p>
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
              <a href="{{route('officer.pertanahan')}}" class="text-sm mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px">Bidang Pertanahan</a>
              <p class="mb-0">
              <span class="text-success text-sm font-weight-bolder me-1">0</span>
              Total
              </p>
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
@endsection
