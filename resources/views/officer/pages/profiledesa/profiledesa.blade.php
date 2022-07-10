@extends('officer.layouts.app')

@section('title')
Profil Desa
@endsection

@section('content')
{{-- Foto Kampung --}}
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body p-0 bg-transparent">
        <div class="row">
          <div class="col-lg-12">
            <img src="{{url('frontend/assets/img/2.jpg')}}" class="img-fluid border-radius-xl" alt="foto kampung">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Video dan Deskripsi --}}
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <div class="row">
          <div class="col-lg-5">
            <h6 class="text-capitalize">Video Desa</h6>

          </div>
          <div class="col-lg-7">
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

{{-- STATISTIK DESA --}}

{{-- Card Count --}}
<h5 class="mt-4 mb-2">Statistik Desa Warungboto</h5>
<div class="row mb-sm-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Warga</p>
              <h5 class="font-weight-bolder">
               {{$total_warga}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total KK</p>
              <h5 class="font-weight-bolder">
               {{$total_kk}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-file text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Laki-Laki</p>
              <h5 class="font-weight-bolder">
               {{$warga_laki}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-male text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Perempuan</p>
              <h5 class="font-weight-bolder">
               {{$warga_perempuan}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-female text-lg opacity-10" aria-hidden="true"></i>
            </div>
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
{{-- Chart Warga --}}
<script>
  var ctx = document.getElementById("bar-chart").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: {!!json_encode($rt)!!},
      datasets: [
        {
          label: "Warga",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: "#3A416F",
          data: {!!json_encode($jmlwarga)!!},
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Kepala Keluarga",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: "#3B416F",
          data: {!!json_encode($jmlkepala)!!},
          fill: false,
          maxBarThickness: 35
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
          }
        }
      }
    }
  });
  // const ctx = document.getElementById('bar-chart').getContext("2d");
  // new Chart(ctx, {
  //   type: 'bar',
  //   data: {
  //     labels: {!!json_encode($rt)!!},
  //     datasets: [{
  //       label: 'Warga',
  //       data: {!!json_encode($jmlwarga)!!},
  //       backgroundColor: [
  //         'rgba(255, 99, 132, 0.2)',
  //       ],
  //       borderColor: [
  //         'rgba(255, 99, 132, 1)',
  //         'rgba(255, 99, 132, 1)',
  //         'rgba(255, 99, 132, 1)',
  //         'rgba(255, 99, 132, 1)'
  //       ],
  //       borderWidth: 1
  //       }, {
  //       label: 'Kepala Keluarga',
  //       data: {!!json_encode($jmlkepala)!!},
  //       backgroundColor: [
  //         'rgba(54, 162, 235, 0.2',
  //         'rgba(54, 162, 235, 0.2)',
  //         'rgba(54, 162, 235, 0.2',
  //         'rgba(54, 162, 235, 0.2'
  //       ],
  //       borderColor: [
  //         'rgba(54, 162, 235, 1)',
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

{{-- Chart Pendidikan --}}
<script>
  var ctx2 = document.getElementById("pie-chart").getContext("2d");
  new Chart(ctx2, {
    type: "pie",
    data: {
      labels: ['SD','SMP','SMA','D1','D2','D3','D4','S1','S2','S3'],
      datasets: [
        {
          weight: 9,
          cutout: 0,
          tension: 0.9,
          pointRadius: 2,
          borderWidth: 2,
          backgroundColor: [
            "#17c1e8",
            "#5e72e4",
            "#3A416F",
            "#a8b8d8",
            "#17c1e8",
            "#5e72e4",
            "#3A416F",
            "#a8b8d8",
            "#17c1e8",
            "#5e72e4",
          ],
          data: [
            {!!json_encode($sd)!!},
            {!!json_encode($smp)!!},
            {!!json_encode($sma)!!},
            {!!json_encode($d1)!!},
            {!!json_encode($d2)!!},
            {!!json_encode($d3)!!},
            {!!json_encode($d4)!!},
            {!!json_encode($s1)!!},
            {!!json_encode($s2)!!},
            {!!json_encode($s3)!!},
          ],
          fill: false
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        }
      },
      interaction: {
        intersect: false,
        mode: "index"
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false
          },
          ticks: {
            display: false
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false
          },
          ticks: {
            display: false
          }
        }
      }
    }
  });
  // const ctx2 = document.getElementById('pie-chart').getContext("2d");
  // new Chart(ctx2, {
  //   type: 'pie',
  //   data: {
  //     labels: ['SD','SMP','SMA', 'D1','D2','D3', 'D4', 'S1','S2','S3'],
  //     datasets: [{
  //       data: [
  //         {!!json_encode($sd)!!},
  //         {!!json_encode($smp)!!},
  //         {!!json_encode($sma)!!},
  //         {!!json_encode($d1)!!},
  //         {!!json_encode($d2)!!},
  //         {!!json_encode($d3)!!},
  //         {!!json_encode($d4)!!},
  //         {!!json_encode($s1)!!},
  //         {!!json_encode($s2)!!},
  //         {!!json_encode($s3)!!},
  //         ],
  //       backgroundColor: [
  //         'rgba(255, 99, 132)',
  //         'rgba(100, 140, 200)',
  //         'rgba(80, 100, 100)',
  //         'rgba(55, 80, 20)',
  //         'rgba(25, 90, 100)',
  //         'rgba(200, 10, 25)',
  //         'rgba(155, 40, 50)',
  //         'rgba(50, 240, 60)',
  //         'rgba(205, 14, 30)',
  //         'rgba(15, 50, 60)',
  //       ],
  //       hoverOffset: 4
  //       },
  //     ]
  //   },
  // });
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
@endpush
