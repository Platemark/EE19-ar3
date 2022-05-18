<?php
// Url:en
$url = "https://opendata-download-metfcst.smhi.se/api/category/pmp3g/version/2/geotype/point/lon/18/lat/59/data.json";

// 1. Anropa api:et
$json = file_get_contents($url);

// 2. Avkoda json-svaret
$dataJson = json_decode($json);

// 3. Plocka ut data vi vill ha
// - "validTime"
// - "name": "t"
// - "values": [11.8]
// Första steg: arrayen timeseries
$timeSeries = $dataJson->timeSeries;

// För json-svaret
$tempData = [];

// Loopa igenom timeSeries
foreach ($timeSeries as $timeStamp) {
    // Lägg till klockslaget
    $data->label = $timeStamp->validTime;

    // Plocka ut alla parametrerar
    $parameters = $timeStamp->parameters;
    
    // Skapa ett tomt objekt
    $data = new stdClass();

    // Söka efter name="t"
    foreach ($parameters as $parameter) {
        if ($parameter->name == "t") {
            // Lägg till temperaturen
            $data->t = $parameter->values[0];
            $tempData[] = $data;
        }
    }
}

// Skriv ut svaret
echo json_encode($tempData);