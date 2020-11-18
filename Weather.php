<?php
/**
* Plugin Name: Labb3 plugin 1
* Author: Emil
*/

include '.env/api.php';

// $apikey = key in api.php

/**
* The Weather API
* api.openweathermap.org/data/2.5/weather?q={city name}&appid={API key}
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
