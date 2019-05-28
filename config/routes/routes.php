<?php

use App\Controller\MyController;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('news', new Route('/news', [
    '_controller' => [MyController::class, 'news']
]));

return $routes;