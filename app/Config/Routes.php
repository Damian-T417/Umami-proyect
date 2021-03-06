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

//Menú
$routes->get('/', 'Home::index');

//Usuario admin
$routes->get('/signup', 'SignupController::index');
$routes->get('/signin', 'SigninController::index');

//Admin
$routes->get('/dashboard', 'Home::dashboard',['filter' => 'authGuard']);

//Categorias
$routes->get('/dashboard/categorias', 'CategoriasController::listar',['filter' => 'authGuard']);
$routes->get('/dashboard/categorias/crear', 'CategoriasController::crear', ['filter' => 'authGuard']);
$routes->post('/dashboard/categorias/guardar', 'CategoriasController::guardar', ['filter' => 'authGuard']);
$routes->get('/dashboard/categorias/editar/(:num)', 'CategoriasController::editar/$1', ['filter' => 'authGuard']);
$routes->post('/dashboard/categorias/actualizar', 'CategoriasController::actualizar', ['filter' => 'authGuard']);
$routes->get('/dashboard/categorias/borrar/(:num)', 'CategoriasController::borrar/$1', ['filter' => 'authGuard']);

//Menu
$routes->get('/dashboard/menu', 'MenuController::listar',['filter' => 'authGuard']);
$routes->get('/dashboard/menu/crear', 'MenuController::crear', ['filter' => 'authGuard']);
$routes->post('/dashboard/menu/guardar', 'MenuController::guardar', ['filter' => 'authGuard']);
$routes->get('/dashboard/menu/editar/(:num)', 'MenuController::editar/$1', ['filter' => 'authGuard']);
$routes->post('/dashboard/menu/actualizar', 'MenuController::actualizar', ['filter' => 'authGuard']);
$routes->get('/dashboard/menu/borrar/(:num)', 'MenuController::borrar/$1', ['filter' => 'authGuard']);

//Promociones
$routes->get('/dashboard/promociones', 'PromocionesController::listar',['filter' => 'authGuard']);
$routes->get('/dashboard/promociones/crear', 'PromocionesController::crear', ['filter' => 'authGuard']);
$routes->post('/dashboard/promociones/guardar', 'PromocionesController::guardar', ['filter' => 'authGuard']);
$routes->get('/dashboard/promociones/editar/(:num)', 'PromocionesController::editar/$1', ['filter' => 'authGuard']);
$routes->post('/dashboard/promociones/actualizar', 'PromocionesController::actualizar', ['filter' => 'authGuard']);
$routes->get('/dashboard/promociones/borrar/(:num)', 'PromocionesController::borrar/$1', ['filter' => 'authGuard']);

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
