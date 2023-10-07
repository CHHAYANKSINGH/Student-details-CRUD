<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/students', 'Student_info::index');
$routes->get('/students/create', 'Student_info::create');
$routes->get('/student/edit(:num)', 'Student_info::edit/$1');
$routes->get('/student/delete(:num)', 'Student_info::delete/$1');
$routes->post('/students/add', 'Student_info::store');
$routes->post('student/update/(:num)', 'Student_info::update/$1');
