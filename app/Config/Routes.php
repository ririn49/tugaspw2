<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/hubungikami', 'ContactUsController::index');
$routes->get('/contact-us', 'ContactUsController::index');
$routes->post('/hubungikami', 'ContactUsController::send');
