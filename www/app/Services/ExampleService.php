<?php

namespace App\Services;

use GuzzleHttp\Client;

class ExampleService
{

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function ExampleDistritosBrasil(){
        $response = $this->client->request('get', 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/SP/distritos');
        return $response->getBody()->getContents();

    }
}
