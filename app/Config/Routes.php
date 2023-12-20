<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
// $routes->get('(:any)','Pages::view/$1');

use App\Controllers\Pages;
$routes->get('pages',[Pages::class,'index']);
$routes->get('(:segment)',[Pages::class,'view']);
