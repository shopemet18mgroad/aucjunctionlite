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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['buyer_auctionlist/(:num)'] = 'buyer_auctionlist';
$route['buyer_auctionlist/index/TA/(:num)'] = 'buyer_auctionlist/index/TA';
$route['buyer_auctionlist/index/AA/(:num)'] = 'buyer_auctionlist/index/AA';
$route['BuyerAuction_car/index/TA/(:num)'] = 'BuyerAuction_car/index/TA';
$route['BuyerAuction_car/index/AA/(:num)'] = 'BuyerAuction_car/index/AA';
$route['BuyerAuction_bike/index/TA/(:num)'] = 'BuyerAuction_bike/index/TA';
$route['BuyerAuction_bike/index/AA/(:num)'] = 'BuyerAuction_bike/index/AA';
$route['BuyerAuction_mobile/index/TA/(:num)'] = 'BuyerAuction_mobile/index/TA';
$route['BuyerAuction_mobile/index/AA/(:num)'] = 'BuyerAuction_mobile/index/AA';
$route['BuyerAuction_tv/index/TA/(:num)'] = 'BuyerAuction_tv/index/TA';
$route['BuyerAuction_tv/index/AA/(:num)'] = 'BuyerAuction_tv/index/AA';
$route['BuyerAuction_properties/index/TA/(:num)'] = 'BuyerAuction_properties/index/TA';
$route['BuyerAuction_properties/index/AA/(:num)'] = 'BuyerAuction_properties/index/AA';
$route['BuyerAuction_toys/index/TA/(:num)'] = 'BuyerAuction_toys/index/TA';
$route['BuyerAuction_toys/index/AA/(:num)'] = 'BuyerAuction_toys/index/AA';
$route['BuyerAuction_furniture/index/TA/(:num)'] = 'BuyerAuction_furniture/index/TA';
$route['BuyerAuction_furniture/index/AA/(:num)'] = 'BuyerAuction_furniture/index/AA';
$route['BuyerAuction_fashion/index/TA/(:num)'] = 'BuyerAuction_fashion/index/TA';
$route['BuyerAuction_fashion/index/AA/(:num)'] = 'BuyerAuction_fashion/index/AA';
$route['BuyerAuction_camera/index/TA/(:num)'] = 'BuyerAuction_camera/index/TA';
$route['BuyerAuction_camera/index/AA/(:num)'] = 'BuyerAuction_camera/index/AA';

$route['BuyerAuction_washingmachine/index/TA/(:num)'] = 'BuyerAuction_washingmachine/index/TA';
$route['BuyerAuction_washingmachine/index/AA/(:num)'] = 'BuyerAuction_washingmachine/index/AA';
$route['BuyerAuction_fridge/index/TA/(:num)'] = 'BuyerAuction_fridge/index/TA';
$route['BuyerAuction_fridge/index/AA/(:num)'] = 'BuyerAuction_fridge/index/AA';
$route['BuyerAuction_laptop/index/TA/(:num)'] = 'BuyerAuction_laptop/index/TA';
$route['BuyerAuction_laptop/index/AA/(:num)'] = 'BuyerAuction_laptop/index/AA';

$route['BuyerAuction_search/index/TA/(:num)'] = 'BuyerAuction_search/index/TA';
$route['BuyerAuction_search/index/AA/(:num)'] = 'BuyerAuction_search/index/AA';