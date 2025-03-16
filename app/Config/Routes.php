<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pickup', 'PickupController::pickIndex');
$routes->get('addModal', 'PickupController::pickAdd');
$routes->get('db-check', 'PickupController::checkDatabase');
$routes->post('savePickup', 'PickupController::pickSave');
$routes->get('fetchUserData', 'PickupController::fetchData');
$routes->post('fetchPick', 'PickupController::pickTable');
