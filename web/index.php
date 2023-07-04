<?php
// Define your routes
$routes = [
    '/' => 'HomeController@index',
    '/whisper' => 'WhisperController@create',
    '/whisper/new' => 'WhisperController@create',
    '/whisper/store' => 'WhisperController@store',
    '/whisper/{id}' => 'WhisperController@show',
];

// Get the current request URI
$requestUri = $_SERVER['REQUEST_URI'];

// Remove any query string parameters
$requestUri = strtok($requestUri, '?');


// Find a matching route
$matchedRoute = null;
$matchedParams = [];

foreach ($routes as $route => $handler) {
    // Convert route pattern to a regular expression
    $pattern = '#^' . preg_replace('#\{(\w+)\}#', '(?<$1>[^/]+)', preg_quote($route)) . '$#';

    // Check if the request URI matches the pattern
    if (preg_match($pattern, $requestUri, $matches)) {
        $matchedRoute = $route;
        $matchedParams = $matches;
        break;
    }
}

// Handle the matched route
if ($matchedRoute !== null) {
    // Extract the controller and method names
    [$controllerName, $methodName] = explode('@', $routes[$matchedRoute]);

    // Include the controller file
    require_once __DIR__ . '/../app/controllers/' . $controllerName . '.php';

    // Create an instance of the controller
    $controller = new $controllerName();

    // Call the specified method with the matched parameters
    $controller->$methodName(...array_values($matchedParams));
    exit(); // Stop processing further routes
}

// Handle 404 Not Found
http_response_code(404);
header("Location: /");