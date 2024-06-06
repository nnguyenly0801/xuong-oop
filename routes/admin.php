<?php

// CRUD bao gồm: Danh sách, Thêm, sửa, xem, xóa
// User:
//      GET     -> USER/INDEX   -> INDEX        -> DANH SÁCH
//      GET     -> USER/CREATE  -> CREATE       -> HIỂN THỊ FORM THÊM MỚI
//      POST    -> USER/STORE   -> STORE        -> DANH SÁCH
//      GET     -> USER/ID      -> SHOW ($id)   -> XEM CHI TIẾT
//      GET     -> USER/ID/EDIT -> EDIT ($id)   -> HIỂM THỊ FORM CẬP NHẬT
//      PUT     -> USER/ID      -> UPDATE ($id) -> LƯU DỮ LIỆU TỪ FORM CẬP NHẬT VÀO DB
//      DELETE  -> USER/ID      -> DELETE ($id) -> XÓA BẢN GHI TRONG DB

use Admin\PhpBase\Controllers\Admin\UserController;
use Admin\PhpBase\Controllers\Admin\DashboardController;

$router->mount('/admin', function () use ($router) {

    $router->get('/', DashboardController::class . '@dashboard');

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');  // Danh sách
        $router->get('/create',         UserController::class . '@create'); // Show form thêm mới
        $router->post('/store',         UserController::class . '@store');  // Lưu mới vào DB
        $router->get('/{id}/show',      UserController::class . '@show');   // Xem chi tiết
        $router->get('/{id}/edit',      UserController::class . '@edit');   // Show form sửa
        $router->post('/{id}/update',   UserController::class . '@update'); // Lưu sửa vào DB
        $router->get('/{id}/delete',    UserController::class . '@delete'); // Xóa
    });
    
});

