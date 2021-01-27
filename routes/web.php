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
    return $router->app->version();
});

$router->group(['prefix' => '/api/v1'], function () use ($router) {
    $router->group(['prefix' => '/breeds'], function () use ($router) {
        $router->get('', 'v1\BreedsController@index');
        $router->get('/types', 'v1\BreedsController@typesIndex');
        $router->get('/{id}', 'v1\BreedsController@show');
        $router->patch('/{id}', 'v1\BreedsController@update');
        $router->post('', 'v1\BreedsController@store');
        $router->delete('/{id}', 'v1\BreedsController@destroy');
        $router->get('/{id}/pets', 'v1\BreedsController@showPets');
    });

    $router->group(['prefix' => '/pets'], function () use ($router){
        $router->get('', 'v1\PetsController@index');
        $router->get('/{id}', 'v1\PetsController@show');
        $router->patch('/{id}', 'v1\PetsController@update');
        $router->post('', 'v1\PetsController@store');
        $router->delete('/{id}', 'v1\PetsController@destroy');
    });
});

$router->group(['prefix' => '/api/v2'], function () use ($router) {
    $router->group(['prefix' => '/breeds'], function () use ($router) {
        $router->get('', 'v2\BreedsController@index');
        $router->get('/types', 'v2\BreedsController@typesIndex');
        $router->get('/{id}', 'v2\BreedsController@show');
        $router->patch('/{id}', 'v2\BreedsController@update');
        $router->post('', 'v2\BreedsController@store');
        $router->delete('/{id}', 'v2\BreedsController@destroy');
        $router->get('/{id}/pets', 'v2\BreedsController@showPets');
    });

    $router->group(['prefix' => '/pets'], function () use ($router){
        $router->get('', 'v2\PetsController@index');
        $router->get('/{id}', 'v2\PetsController@show');
        $router->patch('/{id}', 'v2\PetsController@update');
        $router->post('', 'v2\PetsController@store');
        $router->delete('/{id}', 'v2\PetsController@destroy');
    });
});