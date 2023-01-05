<?php 

namespace App\Controller;

use Laminas\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class SomeController
{
    public function __invoke()
    {
        // $response = new Response;
        $this->response->getBody()->write('<h1>Hello, World</h1>');
        return $this->response;
    }
}