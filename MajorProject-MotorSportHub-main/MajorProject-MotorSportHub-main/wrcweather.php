<?php
//current forecast for Monaco for the WRC
$monaco_coordinates = "43.7384,7.4246";
$monaco_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$monaco_coordinates;
$monaco_forecast = json_decode(file_get_contents($monaco_api_url));


//echo '<pre>';
//print_r($forecast);
//echo '</pre>';

//Current Conditions for monaco
$monaco_temperature_current = round($monaco_forecast->currently->temperature);
$monaco_summary_current = $monaco_forecast->currently->summary;
$monaco_windspeed_current = round($monaco_forecast->currently->windSpeed);
$monaco_humidity_current = $monaco_forecast->currently->humidity*100;

//current forecast for Sweden (Torsby) for the WRC
$sweden_coordinates = "60.1409,13.0102";
$sweden_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$sweden_coordinates;
$sweden_forecast = json_decode(file_get_contents($sweden_api_url));



//Current Conditions for Sweden(Torsby)
$sweden_temperature_current = round($sweden_forecast->currently->temperature);
$sweden_summary_current = $sweden_forecast->currently->summary;
$sweden_windspeed_current = round($sweden_forecast->currently->windSpeed);
$sweden_humidity_current = $sweden_forecast->currently->humidity*100;

//Current Forecast for Mexico (León)
$mexico_coordinates = "42.5987,5.5671";
$mexico_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$mexico_coordinates;
$mexico_forecast = json_decode(file_get_contents($mexico_api_url));

//Current Conditions for Mexico (León)
$mexico_temperature_current = round($mexico_forecast->currently->temperature);
$mexico_summary_current = $mexico_forecast->currently->summary;
$mexico_windspeed_current = round($mexico_forecast->currently->windSpeed);
$mexico_humidity_current = $mexico_forecast->currently->humidity*100;

//Current Forecast for Argentina (Villa Carlos Paz)
$argentina_coordinates = "31.4208,64.4992";
$argentina_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$argentina_coordinates;
$argentina_forecast = json_decode(file_get_contents($argentina_api_url));

//Current Conditions for Argentina (Villa Carlos Paz)
$argentina_temperature_current = round($argentina_forecast->currently->temperature);
$argentina_summary_current = $argentina_forecast->currently->summary;
$argentina_windspeed_current = round($argentina_forecast->currently->windSpeed);
$argentina_humidity_current = $argentina_forecast->currently->humidity*100;

//Current Forecast for Portugal (Matosinhos)
$portugal_coordinates = "41.1844,8.6963";
$portugal_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$portugal_coordinates;
$portugal_forecast = json_decode(file_get_contents($portugal_api_url));

//Current Conditions for Portugal (Matosinhos)
$portugal_temperature_current = round($portugal_forecast->currently->temperature);
$portugal_summary_current = $portugal_forecast->currently->summary;
$portugal_windspeed_current = round($portugal_forecast->currently->windSpeed);
$portugal_humidity_current = $portugal_forecast->currently->humidity*100;

//Current Forecast for Italy (Alghero)
$italy_coordinates = "40.5580,8.3193";
$italy_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$italy_coordinates;
$italy_forecast = json_decode(file_get_contents($italy_api_url));

//Current Conditions for Italy (Alghero)
$italy_temperature_current = round($italy_forecast->currently->temperature);
$italy_summary_current = $italy_forecast->currently->summary;
$italy_windspeed_current = round($italy_forecast->currently->windSpeed);
$italy_humidity_current = $italy_forecast->currently->humidity*100;

//Current Forecast for Kenya (Nairobi)
$kenya_coordinates = "1.2921,36.8219";
$kenya_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$kenya_coordinates;
$kenya_forecast = json_decode(file_get_contents($kenya_api_url));


//Current Conditions for Kenya (Nairobi)
$kenya_temperature_current = round($kenya_forecast->currently->temperature);
$kenya_summary_current = $kenya_forecast->currently->summary;
$kenya_windspeed_current = round($kenya_forecast->currently->windSpeed);
$kenya_humidity_current = $kenya_forecast->currently->humidity*100;

//Current Forecast for Finland (Jyväskylä)
$finland_coordinates = "62.2426,25.7473";
$finland_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$finland_coordinates;
$finland_forecast = json_decode(file_get_contents($finland_api_url));


//Current Conditions for Finland (Jyväskylä)
$finland_temperature_current = round($finland_forecast->currently->temperature);
$finland_summary_current = $finland_forecast->currently->summary;
$finland_windspeed_current = round($finland_forecast->currently->windSpeed);
$finland_humidity_current = $finland_forecast->currently->humidity*100;

//Current Forecast for New Zealand (Auckland)
$newzealand_coordinates = "36.8485,174.7633";
$newzealand_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$newzealand_coordinates;
$newzealand_forecast = json_decode(file_get_contents($newzealand_api_url));

//Current Conditions for New Zealand (Auckland)
$newzealand_temperature_current = round($newzealand_forecast->currently->temperature);
$newzealand_summary_current = $newzealand_forecast->currently->summary;
$newzealand_windspeed_current = round($newzealand_forecast->currently->windSpeed);
$newzealand_humidity_current = $newzealand_forecast->currently->humidity*100;

//Current Forecast for Turkey (Marmaris)
$turkey_coordinates = "36.8549,28.2709";
$turkey_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$turkey_coordinates;
$turkey_forecast = json_decode(file_get_contents($turkey_api_url));

//Current Conditions for Turkey (Marmaris)
$turkey_temperature_current = round($turkey_forecast->currently->temperature);
$turkey_summary_current = $turkey_forecast->currently->summary;
$turkey_windspeed_current = round($turkey_forecast->currently->windSpeed);
$turkey_humidity_current = $turkey_forecast->currently->humidity*100;

//Current Forecast for Germany (Bostalsee)
$germany_coordinates = "49.5659,7.0733";
$germany_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$germany_coordinates;
$germany_forecast = json_decode(file_get_contents($germany_api_url));

//Current Conditions for Germany (Bostalsee)
$germany_temperature_current = round($germany_forecast->currently->temperature);
$germany_summary_current = $germany_forecast->currently->summary;
$germany_windspeed_current = round($germany_forecast->currently->windSpeed);
$germany_humidity_current = $germany_forecast->currently->humidity*100;

//Current Forecast for GB (Llandudno)
$GB_coordinates = "53.3241,3.8276";
$GB_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$GB_coordinates;
$GB_forecast = json_decode(file_get_contents($GB_api_url));

//Current Conditions for GB (Llandudno)
$GB_temperature_current = round($GB_forecast->currently->temperature);
$GB_summary_current = $GB_forecast->currently->summary;
$GB_windspeed_current = round($GB_forecast->currently->windSpeed);
$GB_humidity_current = $GB_forecast->currently->humidity*100;

//Current Forecast for Japan (Nagoya)
$Japan_coordinates = "35.1815,136.9066";
$Japan_api_url = "https://api.darksky.net/forecast/d4a478a1263896fc6857dcc92b09810a/".$Japan_coordinates;
$Japan_forecast = json_decode(file_get_contents($Japan_api_url));

//Current Conditions for Japan (Nagoya)
$Japan_temperature_current = round($Japan_forecast->currently->temperature);
$Japan_summary_current = $Japan_forecast->currently->summary;
$Japan_windspeed_current = round($Japan_forecast->currently->windSpeed);
$Japan_humidity_current = $Japan_forecast->currently->humidity*100;

//function to convert the temperatrue into celcius. This will allow the degress to be easily understood as to the temperature which is being displayed on the page
function celcius($temp){
    return round(($temp-32)*.5556);
  }
?>