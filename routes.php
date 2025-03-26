<?php 

// Using Parse Url method to get the actual path of clinet request
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
    echo "no matching route found";
}
