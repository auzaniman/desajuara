<?php
    $url=file_get_contents("http://localhost:8080/geoserver/coba/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=coba%3ATegal_Desa&outputFormat=application%2Fjson"); 
    echo($url);
?>