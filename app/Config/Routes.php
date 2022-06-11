<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'LicentaHome::index', ['filter' => 'authGuard']);
$routes->get('/signup', 'SignupController::index');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index', ['filter' => 'authGuard']);
$routes->get('/devices', 'DeviceController::index', ['filter' => 'authGuard']);
$routes->get('/devices/tv', 'DeviceController::tvlist', ['filter' => 'authGuard']);
$routes->get('/devices/prize', 'DeviceController::listaprize', ['filter' => 'authGuard']);
$routes->get('/devices/lumini', 'DeviceController::listalumini', ['filter' => 'authGuard']);
$routes->get('/devices/flori', 'DeviceController::listaflori', ['filter' => 'authGuard']);
$routes->get('/logout', 'LogoutController::index', ['filter' => 'authGuard']);
$routes->get('/toggledevice/(:alphanum)', 'DeviceController::toggle/$1', ['filter' => 'authGuard']);
$routes->get('/apicalls', 'ApiController::listcalls', ['filter' => 'authGuard']);
$routes->get('/auto', 'AutoController::index', ['filter' => 'authGuard']);
$routes->get('/scene', 'SceneController::index', ['filter' => 'authGuard']);
$routes->get('/users', 'UsersController::index', ['filter' => 'authGuard']);
$routes->get('/auto/add', 'AutoController::adauga', ['filter' => 'authGuard']);
$routes->get('/auto/add/(:alphanum)', 'AutoController::adauga/$1', ['filter' => 'authGuard']);
// api post routes
$routes->post('/api/update', 'ApiController::update');
$routes->post('/api/call', 'ApiController::call');

// cron routes
$routes->get('/cron/run', 'CronController::run');

/*
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
