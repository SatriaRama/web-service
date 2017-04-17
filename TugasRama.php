<?php 
$json_string = file_get_contents("http://api.wunderground.com/api/ec4ddf94bcbbe9dd/geolookup/conditions/q/ID/Mugassari.json"); 
$parsed_json = json_decode($json_string); 
$location = $parsed_json->{'location'}->{'city'}; 
$station_id = $parsed_json->{'current_observation'}->{'station_id'};
$weather = $parsed_json->{'current_observation'}->{'weather'};
$solarradiation = $parsed_json->{'current_observation'}->{'solarradiation'};
$UV= $parsed_json->{'current_observation'}->{'UV'};
$temperature_string= $parsed_json->{'current_observation'}->{'temperature_string'};
echo "Lokasi Anda Berada : ${location} \n";
echo "<br>";
echo "ID Stasiun Anda: ${station_id} \n";
echo "<br>";
echo "Cuaca Saat Ini: ${weather} \n";
echo "<br>";
echo "Radiasi Matahari : ${solarradiation} \n";
echo "<br>";
echo "Sinar UV : ${UV} \n";
echo "<br>";
echo "Suhu Pada Lokasi Anda : ${temperature_string} \n";
?>