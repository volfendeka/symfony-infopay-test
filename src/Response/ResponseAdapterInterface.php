<?php

namespace App\Response;

interface ResponseAdapterInterface
{
     public function setBody($response);

     public function getBody();

     public function type();

     public function getKeys();

}