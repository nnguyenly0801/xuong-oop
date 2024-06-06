<?php

// Website co các trang là:
// Trang chủ
// Giởi thiệu
// Sản phẩm
// CtSP
// Liên hệ

// Để định nghĩa được, điều đầu tiên làm là phải tạo Controller trước
// Khai báo function tương ứng để xử lý
// Định nghĩa đường dẫn

// HTTP Method: get, post, put(path), delete, option, head

// use Admin\XuongOop\Controller\Client\AboutController;
// use Admin\XuongOop\Controller\Client\ContactController;
// use Admin\XuongOop\Controller\Client\HomeController;
// use Admin\XuongOop\Controller\Client\ProductController;

// $router->get('/',               HomeController::class       . '@index');
// $router->get('/about',          AboutController::class      . '@index');
// $router->get('/contact',        ContactController::class    . '@index');
// $router->post('/contact/store', ContactController::class    . '@store');
// $router->get('/product',        ProductController::class    . '@index');
// $router->get('/product/{id}',   ProductController::class    . '@detail');

use Admin\PhpBase\Controllers\Client\AboutController;
use Admin\PhpBase\Controllers\Client\ContactController;
use Admin\PhpBase\Controllers\Client\HomeController;
use Admin\PhpBase\Controllers\Client\ProductController;

$router->get( '/',                  HomeController::class       . '@index');
$router->get( '/about',             AboutController::class      . '@index');

$router->get( '/contact',           ContactController::class    . '@index');
$router->post( '/contact/store',    ContactController::class    . '@store');

$router->get( '/products',          ProductController::class    . '@index');
$router->get( '/products/{id}',     ProductController::class    . '@detail');

$router->get( '/login',             LoginController::class    . '@showFormLogin');
$router->post( '/handle-login',     LoginController::class    . '@login');
$router->get( '/logout',            LoginController::class    . '@logout');

$router->get('cart/add',           CartController::class . '@add');
$router->get('cart/quantityInc',   CartController::class . '@quantityInc');
$router->get('cart/quantityDec',   CartController::class . '@quantityDec');
$router->get('cart/remove',        CartController::class . '@remove');
$router->get('cart/detail',        CartController::class . '@detail');

$router->post('order/checkout',     OrderController::class . '@checkout');