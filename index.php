<?php


// test autoload avec classes
require __DIR__ . "./vendor/autoload.php";
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

// test 