<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pickup', 'pickupController::pickIndex');
$routes->get('addModal', 'pickupController::pickAdd');
$routes->get('/orders', 'OrderController::index');
