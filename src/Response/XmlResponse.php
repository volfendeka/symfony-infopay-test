<?php

namespace App\Response;

class XmlResponse implements ResponseAdapterInterface
{
    private $body;

    public function setBody($response)
    {
        $this->body = $response->xml();
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