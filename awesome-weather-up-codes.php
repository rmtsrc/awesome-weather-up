<?php

// GET ALL CONDITION CODES
function awesome_weather_condition_code_descriptions()
{
	return apply_filters('awesome_weather_codes', array(
		'tornado' 					=> __('tornado', 'awesome-weather-up'),
		'tropical-storm' 			=> __('tropical storm', 'awesome-weather-up'),
		'hurricane' 				=> __('hurricane', 'awesome-weather-up'),
		'severe-thunderstorms' 		=> __('severe thunderstorms', 'awesome-weather-up'),
		'thunderstorms'				=> __('thunderstorms', 'awesome-weather-up'),
		'thundershowers'			=> __('thundershowers', 'awesome-weather-up'),
		'mixed-rain-snow'			=> __('mixed rain and snow', 'awesome-weather-up'),
		'mixed-rain-sleet' 			=> __('mixed rain and sleet', 'awesome-weather-up'),
		'mixed-snow-sleet' 			=> __('mixed snow and sleet', 'awesome-weather-up'),
		'mixed-rain-hail' 			=> __('mixed rain and hail', 'awesome-weather-up'),
		'freezing-drizzle'			=> __('freezing drizzle', 'awesome-weather-up'),
		'drizzle'					=> __('drizzle', 'awesome-weather-up'),
		'freezing-rain' 			=> __('freezing rain', 'awesome-weather-up'),
		'showers' 					=> __('showers', 'awesome-weather-up'),
		'scattered-showers' 		=> __('scattered showers', 'awesome-weather-up'),
		'snow-flurries' 			=> __('snow flurries', 'awesome-weather-up'),
		'light-snow-showers' 		=> __('light snow showers', 'awesome-weather-up'),
		'blowing-snow' 				=> __('blowing snow', 'awesome-weather-up'),
		'snow' 						=> __('snow', 'awesome-weather-up'),
		'scattered-snow'			=> __('scattered snow showers', 'awesome-weather-up'),
		'heavy-snow' 				=> __('heavy snow', 'awesome-weather-up'),
		'snow-showers' 				=> __('snow showers', 'awesome-weather-up'),
		'hail' 						=> __('hail', 'awesome-weather-up'),
		'sleet' 					=> __('sleet', 'awesome-weather-up'),
		'dust' 						=> __('dust', 'awesome-weather-up'),
		'foggy' 					=> __('foggy', 'awesome-weather-up'),
		'haze' 						=> __('haze', 'awesome-weather-up'),
		'windy' 					=> __('windy', 'awesome-weather-up'),
		'cold' 						=> __('cold', 'awesome-weather-up'),
		'hot' 						=> __('hot', 'awesome-weather-up'),
		'cloudy' 					=> __('cloudy', 'awesome-weather-up'),
		'smoky' 					=> __('smoky', 'awesome-weather-up'),
		'mostly-cloudy' 			=> __('mostly cloudy', 'awesome-weather-up'),
		'partly-cloudy' 			=> __('partly cloudy', 'awesome-weather-up'),
		'clear' 					=> __('clear', 'awesome-weather-up'),
		'sunny' 					=> __('sunny', 'awesome-weather-up'),
		'fair' 						=> __('fair', 'awesome-weather-up'),
		'isolated-thunderstorms' 	=> __('isolated thunderstorms', 'awesome-weather-up'),
		'scattered-thunderstorms' 	=> __('scattered thunderstorms', 'awesome-weather-up'),
		'calm' 						=> __('calm', 'awesome-weather-up'),
		'breeze' 					=> __('breezy', 'awesome-weather-up')
	));
}
