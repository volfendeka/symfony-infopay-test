<?php

namespace App\Services;

use GuzzleHttp\Client;
use App\Response\ResponseFactory;

class RequestService
{

    public $baseUri = "https://www.infopay.com/php-test-by-phone";

    public $responseAdapter;

    public $apiKey;

    public function __construct($baseUri, $apiKey)
    {
        $this->baseUri = $baseUri;
        $this->apiKey = $apiKey;
        $this->responseAdapter = new ResponseFactory();
    }

    public function get( $phone )
    {
        $client = new Client(['base_uri' => $this->baseUri]);

        $response = $client->request('GET', '?' . $phone);

        return $this->responseAdapter->process($response);
    }

    public function post( $phone )
    {
        $client = new Client(['base_uri' => $this->baseUri]);

        $response = $client->request('POST', '',[
            'form_params' => [
                'api_key'=>$this->apiKey,
                'phone' => $phone
            ]
        ]);

        return $this->responseAdapter->process($response);
    }

}
