<?php

// Get the request URI.
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
];

// Function to route the request to the correct controller.
function routeToController() {
    global $uri, $routes; // Access global variables
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri]; // Require the corresponding controller
    } else {
        abort(404); // If the route is not found, abort with error 404
    }
}

// Function to handle errors (404).
function abort($code) {
    http_response_code($code); // Set the HTTP response code
    require "views/{$code}.php"; // Require the corresponding error view
    die(); // Stop the script execution
}

// Call the function to route the request to the correct controller.
routeToController($uri, $routes);