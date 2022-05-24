@extends('officer.layouts.app')

@section('title')
Profil Desa
@endsection

@section('content')
{{-- Main Content --}}
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <div class="row">
          <div class="col-lg-12">
            <h6 class="text-capitalize">Highlight Kampung</h6>
              <iframe
                class="mb-3"
                mute=1
                autoplay=1
                style="width: 100%; height:12.7rem;"
                src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1">
              </iframe>
          </div>
          <hr class="horizontal dark">
          <div class="col-lg-4">
            <h6 class="text-capitalize">Kepala Desa</h6>
              <img src="{{url('backend/assets/img/img2.jpg')}}" class="img-fluid mb-3" alt="foto kepala desa">
          </div>
          <div class="col-lg-8">
            <h6 class="text-capitalize">Sejarah Kampung</h6>
            <p class="mb-3">
              Kampung xxx merupakan kampung yang mayoritas penduduknya adalah suku xxx. Sebelum disahkan namanya menjadi Xxx, masyarakat setempat menyebut kampung tersebut dengan istilah xxx yang diambil dari nama kepala adat saat kampung pertama kali pindah di lokasi yang sekarang didiami. Sebelum tahun 1985, seperti budaya suku xxx pada umumnya, masyarakat Xxx hidup dengan berpindah-pindah tempat di sepanjang tepian Sungai Segah dari hulu ke hilir sungai, sampai akhirnya mulai menetap di lokasi kampung yang sekarang.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="px-3">

      </div>
      <div class="px-3">
        <button class="btn btn-sm btn-warning btn-icon btn-3 mt-3 mb-sm-0" data-bs-toggle="modal" data-bs-target="#modal-form">
          <span class="btn-inner--text">Tambah</span>
        </button>
        <a href="{{route('officer.chart_edit_page')}}" class="btn text-white btn-sm btn-warning btn-icon btn-3 mt-3 mb-sm-0 text-decoration-none">
          <span class="btn-inner--text">Edit Data</span>
        </a>
      </div>
      {{-- Chart --}}
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan RT</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
      {{-- End Chart --}}
    </div>

    {{-- Modal Add Card --}}
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Chart</h3>
              </div>
              <div class="card-body">
                <form role="form text-left" action="{{route('officer.chart_add')}}" method="POST">
                  @csrf
                  <label>Jumlah Warga</label>
                  <div class="input-group mb-3">
                    <input type="text" name="jumlahWarga" id="jumlahWarga" class="form-control" placeholder="Jumlah Warga" >
                  </div>
                  <label>Jumlah Kepala Keluarga</label>
                  <div class="input-group mb-3">
                    <input type="text" name="jumlahKepalaKeluarga" id="jumlahKepalaKeluarga" class="form-control" placeholder="Jumlah Kepala Keluarga" >
                  </div>
                  <label>RT</label>
                  <div class="input-group mb-3">
                    <input type="text" name="rt" id="rt" class="form-control" placeholder="RT" >
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-lg-0 mb-4">
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
  <div class="col-lg-4 mb-lg-0 mb-4">
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
</div>
<div class="row mt-4">
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
@endsection

@push('chart')
<script>
  const ctx = document.getElementById('bar-chart').getContext("2d");
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: {!!json_encode($rt)!!},
      datasets: [{
        label: 'Warga',
        data: {!!json_encode($jmlwarga)!!},
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1
        }, {
        label: 'Kepala Keluarga',
        data: {!!json_encode($jmlkepala)!!},
        backgroundColor: [
          'rgba(54, 162, 235, 0.2',
          'rgba(54, 162, 235, 0.2)',
          'rgba(54, 162, 235, 0.2',
          'rgba(54, 162, 235, 0.2'
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  // const ctx = document.getElementById('bar-chart').getContext("2d");
  // new Chart(ctx, {
  //   type: 'bar',
  //   data: {
  //     labels: ['RT 1', 'RT 2', 'RT 3', 'RT 4'],
  //     datasets: [{
  //       label: 'Warga',
  //       data: [140, 190, 91, 249],
  //       backgroundColor: [
  //         'rgba(255, 99, 132, 0.2)',
  //         'rgba(255, 99, 132, 0.2)',
  //         'rgba(255, 99, 132, 0.2)',
  //         'rgba(255, 99, 132, 0.2)'
  //       ],
  //       borderColor: [
  //         'rgba(255, 99, 132, 1)',
  //         'rgba(255, 99, 132, 1)',
  //         'rgba(255, 99, 132, 1)',
  //         'rgba(255, 99, 132, 1)'
  //       ],
  //       borderWidth: 1
  //   }, {
  //     label: 'Kepala Keluarga',
  //       data: [39, 45, 24, 66],
  //       backgroundColor: [
  //         'rgba(54, 162, 235, 0.2',
  //         'rgba(54, 162, 235, 0.2)',
  //         'rgba(54, 162, 235, 0.2',
  //         'rgba(54, 162, 235, 0.2'
  //       ],
  //       borderColor: [
  //         'rgba(54, 162, 235, 1)',
  //         'rgba(54, 162, 235, 1)',
  //         'rgba(54, 162, 235, 1)',
  //         'rgba(54, 162, 235, 1)'
  //       ],
  //       borderWidth: 1
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       y: {
  //         beginAtZero: true
  //       }
  //     }
  //   }
  // });
</script>

{{-- Chart --}}
<script>
  const ctx2 = document.getElementById('pie-chart').getContext("2d");
  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: [
        'PAUD',
        'SD',
        'SLTP',
        'SLTA',
        'SARJANA',
        'BUTA AKSARA'
      ],
      datasets: [{
        data: [76, 292, 92, 103, 16, 60],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(150, 34, 65)',
          'rgb(200, 25, 100)',
          'rgb(90, 77, 43)',
        ],
        hoverOffset: 4
      }]
    }
  })
</script>

<script>
  const ctx3 = document.getElementById('pie-chart2').getContext("2d");
  new Chart(ctx3, {
    type: 'pie',
    data: {
      labels: [
        'Petani',
        'Pedagang',
        'Tukang Kayu',
        'Pegawai Perusahaan Sawit',
        'Guru SD',
        'PNS'
      ],
      datasets: [{
        data: [337, 14, 20, 25, 11, 5],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(150, 34, 65)',
          'rgb(200, 25, 100)',
          'rgb(90, 77, 43)',
        ],
        hoverOffset: 4
      }]
    }
  })
</script>

<script>
  const ctx4 = document.getElementById('pie-chart3').getContext("2d");
  new Chart(ctx4, {
    type: 'pie',
    data: {
      labels: [
        'Pendapatan Asli Desa',
        'Bantuan dari Pemerintah Kabupaten',
        'Bantuan dari Pemerintah dan Pemerintah Provinsi',
        'Sumber Pihak ke-3',
      ],
      datasets: [{
        data: [1000000000, 1000000000, 1000000000, 200000000,],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(150, 34, 65)',
        ],
        hoverOffset: 4
      }]
    }
  })
</script>

<script>
  const ctx5 = document.getElementById('pie-chart4').getContext("2d");
  new Chart(ctx5, {
    type: 'pie',
    data: {
      labels: [
        'Belanja aparatur desa',
        'Pembangunan infrastruktur',
        'Pembangunan ekonomi',
        'Pembangunan pendidikan',
        'Pemberdayaan masyarakat',
      ],
      datasets: [{
        data: [500000000, 1000000000, 500000000, 500000000, 500000000],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)',
          'rgb(150, 34, 65)',
          'rgb(200, 25, 100)',
        ],
        hoverOffset: 4
      }]
    }
  })
</script>
@endpush
