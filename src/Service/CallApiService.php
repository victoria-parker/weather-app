<?php

namespace App\Service;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client){
        $this->client =$client;
    }

    public function getWeather() :array
    {
        
        $response = $this -> client ->request(
            'GET',
            'https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m',
        );
        
        return $response->toArray();
    }
}