<?php 
include __DIR__ . "/vendor/autoload.php";


// map a route
$router->map('GET', '/', function ( $request) {
    $response = new Laminas\Diactoros\Response;
    $response->getBody()->write('<h1>Hello, World!</h1>');
    return $response;
});
$router->map('GET', '/test', function ( $request) {
    $response = new Laminas\Diactoros\Response;
    $response->getBody()->write('<h1>Hello, test!</h1>');
    return $response;
});
