<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Shop;

/**
 * @var RouteCollection $routes
 */
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

$routes->get('/booking-history', 'BookingHistory::index');
$routes->get('/profile', 'Profile::index');
$routes->post('/profile/save', 'Profile::save');
$routes->post('/profile/savePassword', 'Profile::savePassword');
$routes->get('/deleteAccount', 'Profile::deleteAccount');

$routes->get('/admin', 'Admin::index');

$routes->get('/admin/lapangan', 'Lapangan::index');
$routes->post('/admin/lapangan/create', 'Lapangan::create');
$routes->get('/admin/lapangan/add', 'Lapangan::tambah');
$routes->add('/admin/lapangan/(:segment)/edit', 'Lapangan::edit/$1');
$routes->get('/admin/lapangan/(:segment)/delete', 'Lapangan::delete/$1');

$routes->get('/admin/user', 'User::index');
$routes->post('/admin/user/create', 'User::create');
$routes->get('/admin/user/add', 'User::tambah');
$routes->add('/admin/user/(:segment)/edit', 'User::edit/$1');
$routes->get('/admin/user/(:segment)/delete', 'User::delete/$1');