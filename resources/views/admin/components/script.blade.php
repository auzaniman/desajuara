<!--   Core JS Files   -->
<script src="{{ url('backend/assets/js/core/popper.min.js')}}"></script>
<script src="{{ url('backend/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/chartjs.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/main.min.js"></script>

{{-- Calendar --}}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      initialDate: '2022-04-07',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      events: [
        {
          title: 'Hari Jadi Desa',
          start: '2022-04-08',
          end: '2022-04-09'
        },
        {
          groupId: '999',
          title: 'Kerja Bakti',
          start: '2022-04-09T16:00:00'
        },
        {
          title: 'Rapat Kerja Desa',
          start: '2022-04-11',
          end: '2022-04-13'
        },
        {
          title: 'Rapat',
          start: '2022-04-12T10:30:00',
          end: '2022-04-12T12:30:00'
        },
        {
          title: 'Makan',
          start: '2022-04-12T12:00:00'
        },
        {
          title: 'Selesai',
          start: '2022-04-12T14:30:00'
        },
        {
          title: 'Lomba Desa',
          start: '2022-04-13T07:00:00'
        },
        {
          title: 'Lihat Poster Acara',
          url: '',
          start: '2022-04-28'
        }
      ]
    });
    calendar.render();
  });
</script>

{{-- Chart --}}
<script>

  const ctx = document.getElementById('bar-chart').getContext("2d");
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['RT 1', 'RT 2', 'RT 3', 'RT 4'],
      datasets: [{
        label: 'Warga',
        data: [140, 190, 91, 249],
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
        data: [39, 45, 24, 66],
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

  var ctx1 = document.getElementById("chart-line").getContext("2d");

  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

  gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
  gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
  gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Mobile apps",
        tension: 0.4,
        borderWidth: 0,
        pointRadius: 0,
        borderColor: "#5e72e4",
        backgroundColor: gradientStroke1,
        borderWidth: 3,
        fill: true,
        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
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
            color: '#fbfbfb',
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
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
            color: '#ccc',
            padding: 20,
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });

</script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<script>
  let navActive = document.querySelectorAll('.nav-active')

  navActive.forEach((a) => {
    a.addEventListener("click", (e) => {
        navActive.forEach((el) => el.classList.remove("active"));
        a.classList.add("active");
    });
});
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url('backend/assets/js/argon-dashboard.min.js?v=2.0.2')}}"></script>
