<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['modulo']='formas_pagamentos/index';
$route['modulo/add']='formas_pagamentos/add';
$route['modulo/edit/(:num)']='formas_pagamentos/edit/$1';
$route['modulo/del/(:num)']='formas_pagamentos/del/$1';

