<?php

namespace App\Response;

class NoResponse implements ResponseAdapterInterface
{

    private $body;

    public function setBody($response)
    {
        $this->body = [];
    }
    public function getBody()
    {
        return $this->body;
    }

    public function type()
    {
        return false;
    }

    public function getKeys()
    {

    }
}
