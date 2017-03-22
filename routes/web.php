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

Route::get('/accounts', 'AccountsController@index');
Route::get('/accounts/{account}', 'AccountsController@show');

use App\Main;

Route::get('/mains', function () {

	$accounts = Main::all();

    return view('mains.index', compact('accounts'));
});

Route::get('/mains/{main}', function($id){

	$account  = Main::find($id);

	return view('mains.show', compact('account'));

});
