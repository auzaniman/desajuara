@extends('officer.layouts.app')

@section('title')
Dashboard Officer
@endsection

@section('content')
<div class="row mb-4">
  <div class="col-lg-12">
    <div class="card card-background">
      <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1541451378359-acdede43fdf4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=934&amp;q=80')"></div>
      <div class="card-body text-left">
        <h4 class="text-white">Selamat Datang Admin Desa Warungboto</h4>
        <p class=" text-white bold">Awali pekerjaanmu dengan senyum. Selamat melayani warga desa warungboto. Tunaikan pekerjaan dengan teliti dan seksama.</p>
      </div>
    </div>
  </div>
</div>

<h5>Statistik Warga Desa Warungboto</h5>
<div class="row mb-sm-4">
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Total Penduduk Desa Warungboto</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="line-chart-gradient2" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card mb-4">
      <div class="card-header pb-0 px-3">
        <div class="row">
          <div class="col-md-6">
            <h6 class="mb-0 text-uppercase">Status Kependudukan</h6>
          </div>
          <div class="col-md-6 d-flex justify-content-end align-items-center">
            <i class="far fa-calendar-alt me-2"></i>
            <small>30 March 2020</small>
          </div>
        </div>
      </div>
      <div class="card-body pt-4 p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-plus"></i></button>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Total Warga</h6>
                <span class="text-xs">KTP & domisili desa warungboto</span>
              </div>
            </div>
            <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
              + 0
            </div>
          </li>
        </ul>
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Pindah</h6>
                <span class="text-xs">Pindah KTP dari desa warungboto</span>
              </div>
            </div>
            <div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
              - 0
            </div>
          </li>
        </ul>
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-exclamation"></i></button>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Bukan Warga</h6>
                <span class="text-xs">Bukan KTP desa warungboto</span>
              </div>
            </div>
            <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
              0
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<h5>Total Pelayanan Desa Warungboto</h5>
<div class="row mb-sm-4">
  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="{{route('officer.administrasi')}}" class="mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px"> <i class="ni ni-money-coins text-lg me-1" aria-hidden="true"></i> Administrasi Kependudukan</a>
            </div>
            <div class="d-flex">
              <p class="mb-0">
                <span class="text-primary font-weight-bolder me-1">{{$administrasi}}</span>
                Total <i class="fas fa-globe text-primary text-xs me-1" aria-hidden="true"></i>
              </p>
              <p class="mb-0 ms-4">
                <span class="text-success font-weight-bolder me-1">{{$verifikasi_administrasi}}</span>
                Terverifikasi <i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>
              </p>
              <p class="mb-0 ms-4">
                <span class="text-warning font-weight-bolder me-1">{{$waiting_administrasi}}</span>
                Waiting <i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="{{route('officer.perizinan')}}" class="mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px"> <i class="ni ni-world text-lg me-1" aria-hidden="true"></i> Bidang Perizinan</a>
            </div>
            <div class="d-flex">
              <p class="mb-0">
                <span class="text-primary font-weight-bolder me-1">{{$perizinan}}</span>
                Total <i class="fas fa-globe text-primary text-xs me-1" aria-hidden="true"></i>
              </p>
              <p class="mb-0 ms-4">
                <span class="text-success font-weight-bolder me-1">{{$verifikasi_perizinan}}</span>
                Terverifikasi <i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>
              </p>
              <p class="mb-0 ms-4">
                <span class="text-warning font-weight-bolder me-1">{{$waiting_perizinan}}</span>
                Waiting <i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="{{route('officer.non_perizinan')}}" class="mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px"> <i class="ni ni-paper-diploma text-lg me-1" aria-hidden="true"></i> Bidang Non Perizinan</a>
            </div>
            <div class="d-flex">
              <p class="mb-0">
                <span class="text-primary font-weight-bolder me-1">{{$nonperizinan}}</span>
                Total <i class="fas fa-globe text-primary text-xs me-1" aria-hidden="true"></i>
              </p>
              <p class="mb-0 ms-4">
                <span class="text-success font-weight-bolder me-1">{{$verifikasi_nonperizinan}}</span>
                Terverifikasi <i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>
              </p>
              <p class="mb-0 ms-4">
                <span class="text-warning font-weight-bolder me-1">{{$waiting_nonperizinan}}</span>
                Waiting <i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row align-items-lg-center">
          <div class="col-md-12">
            <div class="numbers">
              <a href="{{route('officer.pertanahan')}}" class="mb-0 text-uppercase font-weight-bold" style="letter-spacing: 0px"> <i class="ni ni-cart text-lg me-1" aria-hidden="true"></i> Bidang Petanahan</a>
            </div>
            <div class="d-flex">
              <p class="mb-0">
                <span class="text-primary font-weight-bolder me-1">0</span>
                Total <i class="fas fa-globe text-primary text-xs me-1" aria-hidden="true"></i>
              </p>
              <p class="mb-0 ms-4">
                <span class="text-success font-weight-bolder me-1">0</span>
                Terverifikasi <i class="fas fa-check-circle text-success text-xs me-1" aria-hidden="true"></i>
              </p>
              <p class="mb-0 ms-4">
                <span class="text-warning font-weight-bolder me-1">0</span>
                Waiting <i class="fa fa-clock-o text-warning text-xs me-1" aria-hidden="true"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Statistik Layanan Harian</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="line-chart-gradient" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Statistik Total Layanan Desa</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="line-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('chart_dashboard')
<script>
  // Chart Total Penduduk
  var ctx = document
    .getElementById("line-chart-gradient2")
    .getContext("2d");

  var gradientStroke1 = ctx.createLinearGradient(0, 230, 0, 50);

  gradientStroke1.addColorStop(1, "rgba(94,114,228,0.2)");
  gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke1.addColorStop(0, "rgba(94,114,228,0)"); //purple colors

  var gradientStroke2 = ctx.createLinearGradient(0, 230, 0, 50);

  gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
  gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke2.addColorStop(0, "rgba(20,23,39,0)"); //purple colors

  new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        "1970-1985",
        "1985-2000",
        "2000-2005",
        "2005-2015",
        "2015-2022",
      ],
      datasets: [
        {
          label: "Layanan Harian",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          data: [100,150,250,150,300],
          maxBarThickness: 6
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
      interaction: {
        intersect: false,
        mode: "index"
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
            color: "#b2b9bf",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2
            }
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: "#b2b9bf",
            padding: 10,
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2
            }
          }
        }
      }
    }
  });

  // Chart Layanan Harian
  var ctx2 = document
    .getElementById("line-chart-gradient")
    .getContext("2d");

  var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke1.addColorStop(1, "rgba(94,114,228,0.2)");
  gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke1.addColorStop(0, "rgba(94,114,228,0)"); //purple colors

  var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
  gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
  gradientStroke2.addColorStop(0, "rgba(20,23,39,0)"); //purple colors

  new Chart(ctx2, {
    type: "line",
    data: {
      labels: [
        "Administrasi",
        "Perizinan",
        "Non Perizinan",
        "Pertanahan",
      ],
      datasets: [
        {
          label: "Layanan Harian",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          data: [
            {!!json_encode($administrasitoday)!!},
            {!!json_encode($perizinantoday)!!},
            {!!json_encode($nonperizinantoday)!!}
          ],
          maxBarThickness: 6
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
      interaction: {
        intersect: false,
        mode: "index"
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
            color: "#b2b9bf",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2
            }
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: "#b2b9bf",
            padding: 10,
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2
            }
          }
        }
      }
    }
  });

  // Chart Total Layanan
  var ctx3 = document.getElementById("line-chart").getContext("2d");

  new Chart(ctx3, {
    type: "line",
    data: {
      labels: [
        "Administrasi",
        "Perizinan",
        "Non Perizinan",
        "Pertanahan",
      ],
      datasets: [
        {
          label: "Administrasi",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#5e72e4",
          borderColor: "#5e72e4",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          data: {!!json_encode($administrasi_total)!!},
          maxBarThickness: 6
        },
        {
          label: "Perizinan",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#3A416F",
          borderColor: "#3A416F",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          data: {!!json_encode($perizinan_total)!!},
          maxBarThickness: 6
        },
        {
          label: "Non Perizinan",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 2,
          pointBackgroundColor: "#17c1e8",
          borderColor: "#17c1e8",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          data: {!!json_encode($nonperizinan_total)!!},
          maxBarThickness: 6
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
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#b2b9bf",
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2
            }
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: true,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: "#b2b9bf",
            padding: 10,
            font: {
              size: 11,
              family: "Open Sans",
              style: "normal",
              lineHeight: 2
            }
          }
        }
      }
    }
  });
</script>
@endpush
