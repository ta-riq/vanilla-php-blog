<?php 

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
// parse_url($uri, PHP_URL_PATH);

// dd(parse_url($uri));

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

if (array_key_exists($uri, $routes)) {
    $heading = $_SERVER["REQUEST_URI"];
    require $routes[$uri];
} else {
    require "views/404.view.php";
}
