<?php

use Slim\App;

$app = new App();

$app->get('/', '\App\Controllers\DefaultController:land');

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});


$app->run();