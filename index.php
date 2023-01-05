<?php 
// test autoload avec classes
require __DIR__ . "/vendor/autoload.php";
// use Fruit\Fruit;
// $classeTest = new Fruit();
// echo $classeTest->couleur;

// test twig
$loader = new \Twig\Loader\ArrayLoader([
        'index' => 'Hello {{ name }}!',
    ]);
    $twig = new \Twig\Environment($loader);
    echo $twig->render('index', ['name' => 'Fabien']);
    
    // test dotenv
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $frameworkName = $_ENV['APP_NAME'];
    echo $frameworkName;
    
    // test routes
    include 'path/to/vendor/autoload.php';
include __DIR__ . "/vendor/autoload.php";

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$router = new League\Route\Router;

// map a route
require __DIR__ . "./src/routes/routes.php";

// $router->map('GET', '/', function (ServerRequestInterface $request): ResponseInterface {
//     $response = new Laminas\Diactoros\Response;
//     $response->getBody()->write('<h1>Hello, World!</h1>');
//     return $response;
// });

$response = $router->dispatch($request);

// send the response to the browser
(new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);