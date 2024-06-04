<?php

use Asus\Base\Controllers\Admin\DashboardController;
use Asus\Base\Controllers\Admin\UserController;

$router->mount('/admin', function () use ($router) {

    $router->get('/',                   DashboardController::class . '@dashboard');

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');
        $router->get('/create',         UserController::class . '@create');
        $router->post('/store',         UserController::class . '@store');
        $router->get('/{id}',           UserController::class . '@show');
        $router->get('/{id}/edit',      UserController::class . '@edit');
        $router->post('/{id}/update',   UserController::class . '@update');
        $router->get('/{id}/delete',   UserController::class . '@delete');
    });
    
});