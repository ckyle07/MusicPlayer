<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Playmusic', 'SongController::song');
$routes->post('/save', 'SongController::save');
$routes->post('/insert', 'SongController::insert');
$routes->get('/search', 'SongController::search');
?>