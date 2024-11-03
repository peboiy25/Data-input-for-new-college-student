<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pmb::index');
$routes->get('/input/(:any)','Pmb:input/$1');
$routes->post('/simpan','Pmb::simpan');
