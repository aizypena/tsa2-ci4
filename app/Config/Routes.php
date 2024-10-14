<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //home routes
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
$routes->get('login', 'Home::login');
$routes->get('signup', 'Home::signup');

//when signed in
$routes->post('login', 'Auth::login');

//sign up
$routes->post('signup', 'Auth::signup');

//dashboard
$routes->get('dashboard', 'Dashboard::index');
$routes->post('dashboard/addproduct', 'Dashboard::addproduct');
$routes->get('dashboard/addproduct', 'Dashboard::showAddProductForm');
$routes->get('dashboard/editproduct/(:num)', 'Dashboard::editproduct/$1');
$routes->post('dashboard/updateproduct/(:num)', 'Dashboard::updateproduct/$1');
$routes->get('dashboard/viewproduct/(:num)', 'Dashboard::viewproduct/$1');
$routes->get('dashboard/delete/(:num)', 'Dashboard::deleteProduct/$1');

//log out
$routes->get('logout', 'Auth::logout');