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

$app->get('/', function () use ($app) {
    return $app->version();
});
$app->group(['prefix'=>'api/v1'], function() use($app){
$app->get('/product', 'ProductController@index');
$app->post('/product', 'ProductController@create');
$app->get('/product/{id}', 'ProductController@show');
$app->put('/product/{id}', 'ProductController@update');
$app->delete('/product/{id}', 'ProductController@destroy');
});