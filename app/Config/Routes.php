<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Shop;

/**
 * @var RouteCollection $routes
 */
$routes->post('/register', 'Register::save');
$routes->get('/', 'Home::index');

$routes->get('/shop', 'Shop::index');
$routes->get('/shop/(:num)', 'Shop::detail/$1');
$routes->post('/shop/postReview', 'Shop::postReview');
$routes->get('/shop/fetchBookings', 'Shop::fetchBookings');

$routes->get('/about', 'About::index');
$routes->get('/contact', 'Contact::index');

$routes->post('/booking', 'Booking::index');
$routes->post('/booking/confirm', 'Booking::confirm');

$routes->get('/booking-success/(:num)', 'BookingSuccess::index/$1');
$routes->set404Override(function(){
    echo view('part/header.php');
    echo view('404.php');
    echo view('part/footer.php');
});

$routes->get('/register', 'Register::index');
$routes->post('/register/save', 'Register::save');

$routes->get('/privacy-policy', 'PrivacyPolicy::index');
$routes->get('/terms-and-conditions', 'TermsConditions::index');

$routes->get('/login', 'Login::index');
$routes->post('/login/authenticate', 'Login::authenticate');
$routes->get('/logout', 'Login::logout');