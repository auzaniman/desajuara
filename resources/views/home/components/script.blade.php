<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src={{url ('frontend/argon_theme/assets/js/core/jquery.min.js')}} type="text/javascript"></script>
<script src={{url ('frontend/argon_theme/assets/js/core/popper.min.js')}} type="text/javascript"></script>
<script src={{url ('frontend/argon_theme/assets/js/core/bootstrap.min.js')}} type="text/javascript"></script>
<script src={{url ('frontend/argon_theme/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src={{url ('frontend/argon_theme/assets/js/plugins/bootstrap-switch.js')}}></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src={{url ('frontend/argon_theme/assets/js/plugins/nouislider.min.js')}} type="text/javascript"></script>
<script src={{url ('frontend/argon_theme/assets/js/plugins/moment.min.js')}}></script>
<script src={{url ('frontend/argon_theme/assets/js/plugins/datetimepicker.js')}} type="text/javascript"></script>
<script src={{url ('frontend/argon_theme/assets/js/plugins/bootstrap-datepicker.min.js')}}></script>
<!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src={{url ('frontend/argon_theme/assets/js/argon-design-system.min.js?v=1.2.2')}} type="text/javascript"></script>

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
        url: "{{route('getkabupaten')}}",
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
        url: "{{route('getkecamatan')}}",
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
        url: "{{route('getdesa')}}",
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
        url: "{{route('getkabupaten')}}",
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
        url: "{{route('getkecamatan')}}",
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
        url: "{{route('getdesa')}}",
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
  function scrollToDownload() {

    if ($('.section-download').length != 0) {
      $("html, body").animate({
        scrollTop: $('.section-download').offset().top
      }, 1000);
    }
  }
</script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script>
  window.TrackJS &&
    TrackJS.install({
      token: "ee6fab19c5a04ac1a32a645abde4613a",
      application: "argon-design-system-pro"
    });
</script>
