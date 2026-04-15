<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/shop', 'ShopController::index');
$routes->get('/editor/(:segment)', 'PageController::editor/$1');
$routes->post('/page/saveBlocks', 'PageController::saveBlocks');
$routes->get('/page/(:segment)', 'PageController::index/$1');
