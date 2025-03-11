<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pickup', 'PickupController::pickIndex');
$routes->get('addModal', 'PickupController::pickAdd');
$routes->get('orders', 'OrderController::index');
$routes->get('db-check', 'PickupController::checkDatabase');
