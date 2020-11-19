<?php
/**
* Plugin Name: Labb3 plugin 1
* Author: Emil
*/

include_once 'env/api.php';
require 'acf-field-data.php';



/**
* The Weather API
* api.openweathermap.org/data/2.5/weather?q={city name}&units=metric&appid={API key}&lang=sv
*
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

/**
* Print to the Dom

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
*/
