<?php
/**
* Plugin Name: Labb3 plugin 1
* Author: Emil
*/

include 'env/api.php';

// $apikey = key in api.php

/**
* The Weather API
* api.openweathermap.org/data/2.5/weather?q={city name}&units=metric&appid={API key}&lang=sv
*
* API data from call
{
  "coord": {
    "lon": 11.97,
    "lat": 57.71
  },
  "weather": [
    {
      "id": 804,
      "main": "Clouds",
      "description": "overcast clouds",
      "icon": "04n"
    }
  ],
  "base": "stations",
  "main": {
    "temp": 283.51,
    "feels_like": 276.61,
    "temp_min": 283.15,
    "temp_max": 283.71,
    "pressure": 1010,
    "humidity": 87
  },
  "visibility": 10000,
  "wind": {
    "speed": 9.3,
    "deg": 220
  },
  "clouds": {
    "all": 90
  },
  "dt": 1605711918,
  "sys": {
    "type": 1,
    "id": 1746,
    "country": "SE",
    "sunrise": 1605683069,
    "sunset": 1605711032
  },
  "timezone": 3600,
  "id": 2711537,
  "name": "Gothenburg",
  "cod": 200
}
*/


    

    $apiUrl ='https://api.openweathermap.org/data/2.5/weather?q=Gothenburg&units=metric&appid='.$apikey.'&lang=sv';
    $weather_data = get_transient('weather');
    
        if (false === $weather_data) {
            $response = wp_remote_get($apiUrl);
            $responseBody = wp_remote_retrieve_body($response);
            $result = json_decode($responseBody);
            set_transient('weather', $result, HOUR_IN_SECONDS);
        }
    $description = $weather_data->{'weather'}[0]->{'description'};
    $city = $weather_data->{'name'};
    $icon = $weather_data->{'weather'}[0]->{'icon'};
    $temp = floor($weather_data->{'main'}->{'temp'});
    $country = $weather_data->{'sys'}->{'country'};
    $feels_like = floor($weather_data->{'main'}->{'feels_like'});
?>

<style>
    .icon {
        height: 100px;
        line-height: 100px;
    }

    .icon>span {
        display: inline-block;
        vertical-align: middle;
        line-height: normal;
    }
</style>

<div>
    Vädret i <?php echo $city; ?>, <?php echo $country ?>. <b>Idag är det <?php echo $description; ?></b>
</div>
<div class="icon">
    <span><img
            src="http://openweathermap.org/img/wn/<?php echo $icon .'.png' ?>"
            alt="" srcset=""></span>
    <span style="font-size: 2rem;"><?php echo $temp; ?>°C Känns som
        <?php echo $feels_like ?>°C </span>
</div>


<?php



// add_action('wp_enqueue_scripts', 'weather_api');
//  function weather_api()
//  {
//      $aurl = admin_url('admin-ajax.php');
//      wp_localize_script('jquery', 'object', [aurl]);
 


//      $script = '
// jQuery.ajax({
//     url:object[0],
//     data:
// })
// ';
//  }
