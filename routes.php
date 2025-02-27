<?php 

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

if (array_key_exists($uri, $routes)) {
    $heading = $_SERVER["REQUEST_URI"] . " Page";
    require $routes[$uri];
} else {
    require "views/404.view.php";
}
