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
$route['default_controller'] = 'Menu/splash';
$route['home'] = 'Menu/home';
$route['profil'] = 'Menu/profil';
$route['tebak-kata'] = 'Menu/home';
$route['informasi'] = 'Menu/informasi';
$route['loading'] = 'Menu/splash';
$route['petunjuk'] = 'Menu/next_petunjuk';
$route['tujuan'] = 'Menu/tujuan';
$route['materi'] = 'Menu/materi';
$route['tata-bahasa'] = 'Menu/tata_bahasa';
$route['youtube'] = 'Menu/youtube';
$route['kamus'] = 'Menu/kamus';
$route['ujian-nama'] = 'Menu/ujian_nama';
$route['action_ujian_nama'] = 'CUjian/action_ujian_nama';
$route['ujian'] = 'CUjian/ujian';
$route['selesai'] = 'Clatihan/selesai';
$route['latihan'] = 'Menu/latihan';

$route['hasil_ujian'] = 'Admin/hasil_ujian';
$route['admin'] = 'Admin/admin_login';
$route['logout'] = 'Admin/logout';
$route['action_login'] = 'Admin/action_admin_login';
// 
$route['404_override'] = 'controllererror';
$route['translate_uri_dashes'] = FALSE;
