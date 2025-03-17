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
$routes->get('editPickup/(:num)', 'PickupController::pickEdit/$1');
$routes->post('updatePickup/(:num)', 'PickupController::pickUpdate/$1');
$routes->get('deletePickup/(:num)', 'PickupController::pickDelete/$1');
$routes->post('delPickup/(:num)', 'PickupController::pickDelData/$1');
$routes->post('removeFile', 'PickupController::removeFile');
$routes->post('pickupStatus', 'PickupController::pickupStatus');
$routes->get('viewPickup/(:num)', 'PickupController::viewPickup/$1');
