<?php
    $url=file_get_contents("http://localhost:8080/geoserver/geoserver_belajar/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geoserver_belajar%3ALokasi_Kajian_Gabungan&outputFormat=application%2Fjson"); 
    echo($url);
?>