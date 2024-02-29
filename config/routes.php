<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return '';
});

Router::addServer('grpc', function () {
    Router::addGroup('/grpc.php.telpo.hi', function () {
        Router::post('/sayHello', 'App\Controller\HiController@sayHello');
        Router::post('/sayHello1', 'App\Controller\HiController@sayHello1');
        Router::post('/sayHello2', 'App\Controller\HiController@sayHello2');
        Router::post('/hello', 'App\Controller\GrpcController@hello');
    });
});
