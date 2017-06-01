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
View::share('id_ref', Config::get('constants.AppConstants.ID_REF'));



Route::get('/', 'AccountsController@index');

Route::get('/accounts', 'AccountsController@index');

Route::get('/accounts/create', 'AccountsController@create');  #create route must place before show action route!!! 

Route::get('/accounts/{account}', 'AccountsController@show');

Route::post('/accounts', 'AccountsController@store');

Route::get('/accounts/{account}/edit', 'AccountsController@edit');

Route::patch('/accounts/{account}', 'AccountsController@update');

Route::delete('/accounts/{account}', 'AccountsController@destroy');
