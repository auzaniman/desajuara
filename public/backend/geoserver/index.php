<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geoserver trial</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="leaflet/leaflet.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="leaflet/leaflet-providers.js"></script>
</head>
<style>
    #maps{
        height: 900px;
    }
</style>
<body>
    <div id="maps"></div>
</body>
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
</html>