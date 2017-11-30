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

#Route::get('/accounts', 'AccountsController@index');

Route::get('/accounts', 
	[
	 'as' => 'accounts',
    'uses' => 'AccountsController@index'
	]);

Route::get('/accounts/create', 'AccountsController@create');  #create route must place before show action route!!! 

Route::post('/accounts', 'AccountsController@store');

Route::get('/accounts/{account}/edit', 'AccountsController@edit');

Route::patch('/accounts/{account}', 'AccountsController@update');

Route::delete('/accounts/{account}', 'AccountsController@destroy');

Route::post('/accounts/{account}/notes', 'NotesController@store');

#https://stackoverflow.com/questions/38252038/laravel-5-2-notfoundhttpexception-in-handler-php-line-103
Route::get('/accounts/{account}', 'AccountsController@show');

//---------------------  testing dbs connection ------------------------------

Route::get('check-connection', function () {
    $accounts = DB::table("accounts")->get();
    dd($accounts);
});

Route::get('check-connection-2', function () {
    $country_cou = DB::connection("oldAccount")->table("country_cou")->get();
    dd($country_cou);
});





