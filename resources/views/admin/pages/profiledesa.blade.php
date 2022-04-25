@extends('admin.layouts.app')

@section('title')
Profil Desa
@endsection

@section('content')
<main class="main-content position-relative border-radius-lg ">
  @include('admin.components.topbar')
  <div class="container-fluid py-4">
    <div class="row mt-4">
      <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize">Sejarah Kampung</h6>
            <p class="mb-3">
              Kampung xxx merupakan kampung yang mayoritas penduduknya adalah suku xxx. Sebelum disahkan namanya menjadi Xxx, masyarakat setempat menyebut kampung tersebut dengan istilah xxx yang diambil dari nama kepala adat saat kampung pertama kali pindah di lokasi yang sekarang didiami. Sebelum tahun 1985, seperti budaya suku xxx pada umumnya, masyarakat Xxx hidup dengan berpindah-pindah tempat di sepanjang tepian Sungai Segah dari hulu ke hilir sungai, sampai akhirnya mulai menetap di lokasi kampung yang sekarang.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan RT</h6>
          </div>
          <div class="card-body p-3">
            <div class="chart">
              <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Tingkat Pendidikan</h6>
          </div>
          <div class="card-body p-3">
            <div class="chart">
              <canvas id="pie-chart" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-5 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Mata Pencaharian</h6>
          </div>
          <div class="card-body p-3">
            <div class="chart">
              <canvas id="pie-chart2" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="col-lg-5">
        <div class="card z-index-2 h-100">
          <div class="card-header pb-0 pt-3 bg-transparent">
            <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Mata Pencaharian</h6>
          </div>
          <div class="card-body p-3">
            <div class="chart">
              <canvas id="pie-chart2" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    @include('admin.components.footer')
  </div>
</main>
@endsection
