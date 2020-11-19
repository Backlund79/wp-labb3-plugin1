<?php
/**
* Plugin Name: Labb3 plugin 1
* Author: Emil
*/

include_once 'env/api.php';
require 'acf-field-data.php';

$object_weather = new Weather_app('https://api.openweathermap.org/data/2.5/weather?q=Gothenburg&units=metric&appid='.$apikey.'&lang=sv');

add_action('template_redirect', array($object_weather, 'print_weather_to_dom'));

class Weather_app
{
    public $apiUrl;
    public $weather_data;
    public $description;
    public $city;
    public $icon;
    public $temp;
    public $country;
    public $feels_like;
    public $response;
    public $responseBody;
    public $result;
    public $from_acf_options;

    public function __construct($apiUrl)
    {
        $this->apiUrl = $apiUrl;
        self::check_transient();
    }

    public function check_transient()
    {
        $this->weather_data = get_transient('weather');

        if (false === $this->weather_data) {
            $this->response = wp_remote_get($this->apiUrl);
            $this->responseBody = wp_remote_retrieve_body($this->response);
            $this->result = json_decode($this->responseBody);
            set_transient('weather', $this->result, HOUR_IN_SECONDS);
        }

        $this->description = $this->weather_data->{'weather'}[0]->{'description'};
        $this->city = $this->weather_data->{'name'};
        $this->icon = $this->weather_data->{'weather'}[0]->{'icon'};
        $this->temp = floor($this->weather_data->{'main'}->{'temp'});
        $this->country = $this->weather_data->{'sys'}->{'country'};
        $this->feels_like = floor($this->weather_data->{'main'}->{'feels_like'});
        $this->from_acf_options = get_field('where_to_show_weather', 'options');
    }
    public function print_weather_to_dom()
    {
        if (call_user_func($this->from_acf_options)) {
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
    Vädret i <?php echo $this->city; ?>, <?php echo $this->country ?>. <b>Idag är det <?php echo $this->description; ?></b>
</div>
<div class="icon">
    <span><img
            src="http://openweathermap.org/img/wn/<?php echo $this->icon .'.png' ?>"
            alt="" srcset=""></span>
    <span style="font-size: 2rem;"><?php echo $this->temp; ?>°C Känns
        som
        <?php echo $this->feels_like ?>°C </span>
</div>

<?php
        }
    }
}
