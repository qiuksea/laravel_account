<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*

GET /posts -index
GET /posts/create - create
POST /posts -store
GET /posts/{id}/edit - edit 
GET /posts/{id} -show
PATCH /posts/{id} - update
DELETE /posts/{id} - destroy

php artisan route:list

*/

#https://stackoverflow.com/questions/26062715/defining-constants-in-laravel

View::share('id_ref', Config::get('constants.AppConstants.ID_REF'));


Route::patch('/accounts/{id}/status', 'AccountsController@update_status');
#https://stackoverflow.com/questions/16661292/add-new-methods-to-a-resource-controller-in-laravel
#https://stackoverflow.com/questions/35250390/laravel-5-2-passing-route-parameter-to-controller

Route::get('/', 'AccountsController@index');

Route::get('/accounts', 'AccountsController@index');

Route::get('/accounts/create', 'AccountsController@create');  #create route must place before show action route!!! 

Route::get('/accounts/{account}', 'AccountsController@show');

Route::post('/accounts', 'AccountsController@store');

Route::get('/accounts/{account}/edit', 'AccountsController@edit');

Route::patch('/accounts/{account}', 'AccountsController@update');

Route::delete('/accounts/{account}', 'AccountsController@destroy');


Route::post('/accounts/{account}/notes', 'NotesController@store');

