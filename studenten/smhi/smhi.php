<?php
// Url till api:et
$url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json";

// Hämta JSON
$json = file_get_contents($url);

// Avkoda JSON
$jsonData = json_decode($json);

// Plocka ut data vi vill ha
$timeSeries = $jsonData->timeSeries;

// För json-svaret
$tempData = [];

// Loopa arrayen för att plocka ut temperaturvärdena
foreach ($timeSeries as $i) {
    // Plocka tidpunkt
    $validTime = $i->validTime;

    $data->label = $validTime;

    // Plocka ut alla parametrar
    $parameters = $i->parameters;

    $data = new stdClass();
    
    foreach ($parameters as $parameter) {
        if($parameter->name == "t") {
            $temperature = $parameter->values[0];
            $data->t = $temperature;
            $tempData[] = $data;
        }
    }
}

echo json_encode($tempData);