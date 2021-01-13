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
        $router->get('', 'BreedsController@index');
        $router->get('/types', 'BreedsController@typesIndex');
        $router->get('/{id}', 'BreedsController@show');
        $router->put('/{id}', 'BreedsController@update');
        $router->post('', 'BreedsController@store');
        $router->delete('/{id}', 'BreedsController@destroy');
        $router->get('/{id}/pets', 'BreedsController@showPets');
    });

    $router->group(['prefix' => '/pets'], function () use ($router){
        $router->get('', 'PetsController@index');
        $router->get('/{id}', 'PetsController@show');
        $router->put('/{id}', 'PetsController@update');
        $router->post('', 'PetsController@store');
        $router->delete('/{id}', 'PetsController@destroy');
    });
});
