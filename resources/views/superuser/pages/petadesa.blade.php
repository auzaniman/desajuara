@extends('superuser.layouts.app')

@section('title')
Peta Desa
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize">Peta Desa</h6>
        <p class="mb-3">
          Fitur peta desa ini adalah fitur unggulan dari platform cendikia. Peta desa ini berbasis web gis dan menampilkan landskap desa tersebut. Di dalam peta desa terdapat fitur-fitur yang menampilkan informasi desa, yaitu penggunaan lahan, kondisi lahan, pekerjaan, status tanah, kepemilikan tanah. Kemudian terdapat fitur informasi lahan, secara teknis ketika salahs atu area di klik, maka muncul pop up informasi mengenai lahan tersebut. Informasi mengenai lahan ini hanya dapat diedit oleh petugas atas ijin pemilik lahan tersebut. Disamping itu terdapat fitur zoom in/out, tangging, dan pengukur jarak. Kedepannya, dalam fitur peta desa ini, terdapat fitur paint seperti game Warcraft/ rise empie karena fitur ini ditujukan untuk perencanaan pembangunan. Fitur paint tersebut seperti jalan, rumah, gedung kantor, hutan, dsb.

        </p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize">Peta Desa</h6>
        <div id="maps"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('style_gis')
<style>
  #maps{
    height: 900px;
  }
</style>
@endpush

@push('script_gis')
<script>
  var map = L.map('maps').setView([1.6084550927069599, 118.03868006684827], 8);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '© OpenStreetMap'
}).addTo(map);
$.ajax({
  type: 'POST',
  url: 'layer/requests_berau_administrasi.php',
  dataType: "json",
  success: function(response){
  var data=response;
  L.geoJson(data,{
    style: function(feature){
  var Style1
  return { color: "#cc3f39", weight: 1, opacity: 1 };
  },
    }).addTo(map);
    var data=response;
  }
});
</script>
@endpush
