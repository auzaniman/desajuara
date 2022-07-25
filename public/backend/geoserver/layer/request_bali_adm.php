<?php
    $url=file_get_contents("http://localhost:8080/geoserver/geos/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geos%3ABALI_ADM&outputFormat=application%2Fjson");
    echo($url);
?>