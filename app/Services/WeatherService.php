<?php
namespace App\Services;

use GuzzleHttp\Client;
class WeatherService{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'http://api.openweathermap.org/data/2.5/weather',
        ]);
        $this->apiKey = env('WEATHER_API_KEY');
    }

    public function getWeather($city)
    {
        $response = $this->client->get('weather', [
            'query' => [
                'q' => $city,
                'appid' => $this->apiKey,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}