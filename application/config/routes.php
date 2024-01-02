<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'vue';
$route['404_override'] = 'home/page_missing';
$route['translate_uri_dashes'] = FALSE;
$route['api/(:any)'] = 'api/$1';
$route['api/get_categories/(:any)'] = 'api/get_categories/$1';
$route['api/filter_listings'] = 'api/filter_listings';
$route['api/filter_listings/(:any)'] = 'api/filter_listings/$1';
$route['home/filter_listings'] = 'home/filter_listings';
$route['home/filter_listings/(:any)'] = 'home/filter_listings/$1';
$route['api/get_frontend_settings/(:any)'] = 'api/get_frontend_settings/$1';
$route['api/get_cities/(:any)'] = 'api/get_cities/$1';


//custom URL
$route['general/(:any)/(:any)'] = 'home/listing/$1/$2';
$route['hotel/(:any)/(:any)'] = 'home/listing/$1/$2';
$route['restaurant/(:any)/(:any)'] = 'home/listing/$1/$2';
$route['shop/(:any)/(:any)'] = 'home/listing/$1/$2';
$route['beauty/(:any)/(:any)'] = 'home/listing/$1/$2';

/**
 * We will use manual routes only for the API calls
 * We also defined spesific HTTP methods
 */
$route['api/v1/users']['GET'] = 'api/v1/user';
$route['api/v1/users/(:num)']['GET'] = 'api/v1/user/show/$1';
$route['api/v1/test-login/(:any)']['POST'] = 'api/v1/auth/test_login/$1';
$route['api/(.*)'] = '404';