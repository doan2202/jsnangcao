<?php
use Nguyenvandoan\Dethithu\Controllers\GiangVienController;

session_start();
// Require composer autoloader
require_once './vendor/autoload.php';
require_once './env.php';
require_once './helper.php';
use Bramus\Router\Router;

// Create Router instance
$router = new Router();
$router->mount('/giang-vien', function () use ($router) {

    //crud
    $router->get('/', GiangVienController::class . '@index'); //danhsach
    $router->get('/{id}/delete', GiangVienController::class . '@delete'); //xoa
    $router->match('GET|POST', '/create', GiangVienController::class . '@create'); //them
    $router->match('GET|POST', '/{id}/update', GiangVienController::class . '@update'); //sua



});

$router->run();

