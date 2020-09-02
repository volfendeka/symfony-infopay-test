<?php


namespace App\Response;


use Psr\Http\Message\ResponseInterface;

class ResponseFactory
{

	public function process( ResponseInterface$response)
	{
	    $result = [];
		try{
		    if($response->getHeaders()){
		        $result = new JsonResponse();
            }

            if($response->getHeaders()){
                $result = new XmlResponse();
            }

            $result->setBody($response);

            return $result;
		}
		catch ( \InvalidArgumentException  $exception ){
			//log
		}
		return new NoResponse();
	}
}
