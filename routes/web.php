<?php

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
    return $router->app->version();
});

//Carro

$router->get('carros', 'CarroController@index');
$router->get('carros/{id}', 'CarroController@getById');
$router->post('carros', 'CarroController@store');

$router->get('usuarios', 'UsuarioController@index');
$router->get('usuarios/{id}', 'UsuarioController@getById');
$router->post('usuarios', 'UsuarioController@store');

$router->get('carrosdisponibles', 'CarrosDisponiblesController@index');
$router->post('carrosdisponibles', 'CarrosDisponiblesController@store');
$router->get('carros/{carro_id}/carrosdisponibles/{id}', 'CarrosDisponiblesController@getById');

$router->get('carrosalquilados', 'CarrosAlquiladosController@index');   
$router->post('carrosalquilados', 'CarrosAlquiladosController@store');   
$router->get('carrosalquilados/{usuario_id}', 'CarrosAlquiladosController@getById');