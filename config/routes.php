<?php

use Slim\App;

$app = new App();

$container = $app->getContainer();

//init twig view
$container['view'] =  function ($c) {
    $view = new \Slim\Views\Twig(VIEW_BASE_PATH, ['cache' => BASE_PATH .'/cache']);
    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new \Slim\Views\TwigExtension($c['router'], $basePath));

    return $view;
};

$app->get('/', '\App\Controllers\DefaultController:land');

$app->get('/hello/{name}', function ($request, $response, $args) {
    $response->write("Hello, " . $args['name']);
    return $response;
});


$app->run();