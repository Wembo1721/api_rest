<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/personas', 'Home::datosPersonales');
$routes->get('/ciudades', 'Home::ciudades');
$routes->get('/ciudades/(:any)', 'Home::findByCiudad/$1');
$routes->get('/datos', 'Home::users_get');



