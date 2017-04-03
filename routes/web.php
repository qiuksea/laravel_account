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

*/


Route::get('/', 'AccountsController@index');

Route::get('/accounts', 'AccountsController@index');

Route::get('/accounts/{account}', 'AccountsController@show');

Route::get('/accounts/create', 'AccountsController@create');

Route::post('/accounts', 'AccountsController@store');

Route::get('/accounts/{account}/edit', 'AccountsController@edit');

Route::patch('/accounts/{account}', 'AccountsController@update');

Route::delete('/accounts/{account}', 'AccountsController@destroy');

