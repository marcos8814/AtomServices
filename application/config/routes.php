<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//rotas para forma de pagamentos 
$route['modulo']='formas_pagamentos/index';
$route['modulo/add']='formas_pagamentos/add';
$route['modulo/edit/(:num)']='formas_pagamentos/edit/$1';
$route['modulo/del/(:num)']='formas_pagamentos/del/$1';

//rota para ordem de serviços
$route['os']='ordem_servicos/index';
$route['os/add']='ordem_servicos/add';
$route['os/edit/(:num)']='ordem_servicos/edit/$1';
$route['os/del/(:num)']='ordem_servicos/del/$1';





