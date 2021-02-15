<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Halaman Utama
$routes->get('/home/kosan', 'home::kosan');
$routes->get('/home/blog', 'home::blog');
$routes->get('/home/tentang', 'home::tentang');
$routes->get('/home/kontak', 'home::kontak');
$routes->get('/home/(:any)', 'home::detail/$1');

// Halaman User
$routes->get('/', 'Home::index');
$routes->get('/user', 'User::index', ['filter' => 'auth']);
$routes->get('/user/password', 'User::password', ['filter' => 'auth']);
$routes->get('/user/wishlist', 'User::wishlist', ['filter' => 'auth']);

// Halaman Auth
$routes->get('/auth/registration', 'Auth::registration', ['filter' => 'noauth']);
$routes->get('/auth', 'Auth::index', ['filter' => 'noauth']);

// Halaman Admin
$routes->get('/admin', 'Admin::index', ['filter' => 'auth']);
$routes->get('/admin/kosan', 'Admin::kosan', ['filter' => 'auth']);
$routes->get('/admin/logout', 'Admin::logout', ['filter' => 'auth']);
$routes->get('/admin/profil', 'Admin::profil', ['filter' => 'auth']);
$routes->get('/admin/edit-profil', 'Admin::edit_profil', ['filter' => 'auth']);
$routes->get('/admin/delete/(:segment)', 'Admin::delete/$1', ['filter' => 'auth']);
$routes->get('/admin/(:any)', 'Admin::detail/$1', ['filter' => 'auth']);

// Halaman Mitra
$routes->get('/mitra/profil', 'mitra::profil', ['filter' => 'auth']);
$routes->get('/mitra/edit-profil', 'mitra::edit_profil', ['filter' => 'auth']);
$routes->get('/mitra/create', 'mitra::create', ['filter' => 'auth']);
$routes->get('/mitra/edit/(:segment)', 'mitra::edit/$1', ['filter' => 'auth']);
$routes->get('/mitra/kosan', 'mitra::kosan', ['filter' => 'auth']);
$routes->get('/mitra/delete/(:segment)', 'mitra::delete/$1', ['filter' => 'auth']);
$routes->get('/mitra/logout', 'mitra::logout', ['filter' => 'auth']);
$routes->get('/mitra/(:any)', 'mitra::detail/$1', ['filter' => 'auth']);


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
