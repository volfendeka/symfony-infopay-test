<?php

namespace App\Response;

class JsonResponse implements ResponseAdapterInterface
{
    private $body;

    public function setBody($response)
    {
        $this->body = \GuzzleHttp\json_decode( $response->getBody()->getContents(), true );
    }
    public function getBody()
    {
        return $this->body;
    }

    public function type()
    {

    }

    public function getKeys()
    {

    }
}