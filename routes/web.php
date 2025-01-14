<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return ["Hello Haiiiii..!!!"];
});

$router->get('/datauser', function () use ($router) {
    $results = app('db')->select("SELECT * FROM users");
    return response()->json($results);
});

//menampilkan data baber
$router->get('/data','Controller@getBarber');
$router->get('/ambildata','AuthController@ambildata');


$router->post('/register', 'UserController@register');
$router->post('/login','AuthController@login');


$router->group(['middleware' => 'auth'], function() use ($router){
    $router->post('/logout', 'AuthController@logout');
});
