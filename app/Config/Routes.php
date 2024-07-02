<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->post('/register', 'Register::save');
$routes->get('/', 'Home::index');
$routes->get('/item-detail', 'ItemDetail::index');
$routes->get('/shop', 'Shop::index');
$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');
$routes->get('/booking', 'Booking::index');
$routes->get('/confirmation', 'Confirmation::index');
$routes->set404Override(function(){
    echo view('part/header.php');
    echo view('404.php');
    echo view('part/footer.php');
});

$routes->get('/register', 'Register::index');
$routes->post('/register/save', 'Register::save');
