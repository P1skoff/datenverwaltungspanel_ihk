<?php
## Get the URI
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

## Define the routes
$routes = [
    '/' => '/var/www/html/src/controllers/dashboard.php',
    '/login' => '/var/www/html/src/controllers/login.php',
    '/dashboard'=> '/var/www/html/src/controllers/dashboard.php',
];

## Load the right controller
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {

## Load the 404 controller
    http_response_code(404);

    require '/var/www/html/src/views/404.php';
}

die();