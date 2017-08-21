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
$app->get('/products', 'ProductController@allProducts');
$app->post('/products', 'ProductController@createProduct');
$app->get('/products/{id}', 'ProductController@showProduct');
$app->put('/products/{id}', 'ProductController@updateProduct');
$app->delete('products/{id}', 'ProductController@destroyProduct');
});