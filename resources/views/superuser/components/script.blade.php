<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ url('backend/assets/js/core/popper.min.js')}}"></script>
<script src="{{ url('backend/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{ url('backend/assets/js/plugins/chartjs.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/locales-all.min.js,npm/fullcalendar@5/main.min.js"></script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{url('backend/assets/js/argon-dashboard.min.js?v=2.0.2')}}"></script>
<!-- Magnific Popup core JS file -->
<script src="{{url('backend/plugin/Magnific/dist/magnific-popup/jquery.magnific-popup.js')}}"></script>

<script>
  $(function () {
    $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
  })

  $(function () {
    $('#provinsi').on('change', function(){
      let id_provinsi = $('#provinsi').val();

      $.ajax({
        type: "POST",
        url: "{{route('getkabupatenprofile')}}",
        data: {id_provinsi:id_provinsi},
        cache: false,
        success: function(msg){
          $('#kabupaten').html(msg);
          $('#kecamatan').html('');
          $('#desa').html('');
        },
        error: function(data){
          console.log('error', data)
        }
      })
    })

    $('#kabupaten').on('change', function(){
      let id_kabupaten = $('#kabupaten').val();

      $.ajax({
        type: "POST",
        url: "{{route('getkecamatanprofile')}}",
        data: {id_kabupaten:id_kabupaten},
        cache: false,
        success: function(msg){
          $('#kecamatan').html(msg);
          $('#desa').html('');
        },
        error: function(data){
          console.log('error', data)
        }
      })
    })

    $('#kecamatan').on('change', function(){
      let id_kecamatan = $('#kecamatan').val();

      $.ajax({
        type: "POST",
        url: "{{route('getdesaprofile')}}",
        data: {id_kecamatan:id_kecamatan},
        cache: false,
        success: function(msg){
          $('#desa').html(msg);
        },
        error: function(data){
          console.log('error', data)
        }
      })
    })
  })

  $(function () {
    $('#1provinsi').on('change', function(){
      let id_provinsi = $('#1provinsi').val();

      $.ajax({
        type: "POST",
        url: "{{route('getkabupatenprofile')}}",
        data: {id_provinsi:id_provinsi},
        cache: false,
        success: function(msg){
          $('#1kabupaten').html(msg);
          $('#1kecamatan').html('');
          $('#1desa').html('');
        },
        error: function(data){
          console.log('error', data)
        }
      })
    })

    $('#1kabupaten').on('change', function(){
      let id_kabupaten = $('#1kabupaten').val();

      $.ajax({
        type: "POST",
        url: "{{route('getkecamatanprofile')}}",
        data: {id_kabupaten:id_kabupaten},
        cache: false,
        success: function(msg){
          $('#1kecamatan').html(msg);
          $('#1desa').html('');
        },
        error: function(data){
          console.log('error', data)
        }
      })
    })

    $('#1kecamatan').on('change', function(){
      let id_kecamatan = $('#1kecamatan').val();

      $.ajax({
        type: "POST",
        url: "{{route('getdesaprofile')}}",
        data: {id_kecamatan:id_kecamatan},
        cache: false,
        success: function(msg){
          $('#1desa').html(msg);
        },
        error: function(data){
          console.log('error', data)
        }
      })
    })
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
