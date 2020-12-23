<?php

namespace Trapzpro\ChuckNorrisJokes;

use GuzzleHttp\Client;

class JokeFactory
{
    const API_ENDPOINT = 'https://api.icndb.com/jokes/random';

    protected $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    public function getRandomJoke()
    {
        //https://api.icndb.com/jokes/random
        $response = $this->client->get(self::API_ENDPOINT);

        $contents = json_decode($response->getBody()->getContents());

        return $contents->value->joke;
    }
}
