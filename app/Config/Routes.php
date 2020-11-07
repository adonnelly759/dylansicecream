<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

// Frontend Routes
$routes->add("/", "Frontend::index");
$routes->get("/login", "Frontend::login");
$routes->get("/admin", "Frontend::admin", ['filter' => 'checkSession']);
$routes->get("/logout", "Frontend::logout");

// User Authentication
$routes->post("/login", "UserController::check");

// Admin routes
// User
$routes->get("/admin/user", "AdminUser::manage", ['filter' => 'checkSession']);
$routes->add("/admin/user/add", "AdminUser::add", ['filter' => 'checkSession']);
$routes->add("/admin/user/edit/(:any)", "AdminUser::edit/$1", ['filter' => 'checkSession']);
$routes->add("/admin/user/delete/(:any)", "AdminUser::delete/$1", ['filter' => 'checkSession']);

// Flavour
$routes->get("/admin/flavour", "AdminFlavour::manage", ['filter' => 'checkSession']);
$routes->add("/admin/flavour/add", "AdminFlavour::add", ['filter' => 'checkSession']);
$routes->add("/admin/flavour/edit/(:any)", "AdminFlavour::edit/$1", ['filter' => 'checkSession']);
$routes->add("/admin/flavour/delete/(:any)", "AdminFlavour::delete/$1", ['filter' => 'checkSession']);

// Wafer
$routes->get("/admin/wafer", "AdminWafer::manage", ['filter' => 'checkSession']);
$routes->add("/admin/wafer/add", "AdminWafer::add", ['filter' => 'checkSession']);
$routes->add("/admin/wafer/edit/(:any)", "AdminWafer::edit/$1", ['filter' => 'checkSession']);
$routes->add("/admin/wafer/delete/(:any)", "AdminWafer::delete/$1", ['filter' => 'checkSession']);

//Inclusion
$routes->get("admin/inclusion", "AdminInclusion::manage", ['filter' => 'checkSession']);
$routes->add("admin/inclusion/add", "AdminInclusion::add", ['filter' => 'checkSession']);
$routes->add("admin/inclusion/edit/(:any)", "AdminInclusion::edit/$1", ['filter' => 'checkSession']);
$routes->add("admin/inclusion/delete/(:any)", "AdminInclusion::delete/$1", ['filter' => 'checkSession']);

//Sauce
$routes->get("admin/sauce", "AdminSauce::manage", ['filter' => 'checkSession']);
$routes->add("admin/sauce/add", "AdminSauce::add", ['filter' => 'checkSession']);
$routes->add("admin/sauce/edit/(:any)", "AdminSauce::edit/$1", ['filter' => 'checkSession']);
$routes->add("admin/sauce/delete/(:any)", "AdminSauce::delete/$1", ['filter' => 'checkSession']);

//Sprinkles
$routes->get("admin/sprinkles", "AdminSprinkles::manage", ['filter' => 'checkSession']);
$routes->add("admin/sprinkles/add", "AdminSprinkles::add", ['filter' => 'checkSession']);
$routes->add("admin/sprinkles/edit/(:any)", "AdminSprinkles::edit/$1", ['filter' => 'checkSession']);
$routes->add("admin/sprinkles/delete/(:any)", "AdminSprinkles::delete/$1", ['filter' => 'checkSession']);

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
