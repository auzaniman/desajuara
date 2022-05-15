<!--   Core JS Files   -->
<script src="{{ url('backend/assets/js/core/popper.min.js')}}"></script>
<script src="{{ url('backend/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/chartjs.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/main.min.js"></script>
<script src="{{url('backend/assets/js/argon-dashboard.min.js?v=2.0.2')}}"></script>

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
