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

Route::get('/mains', function () {

	$accounts = DB::table('mains')->get();

    return view('mains.index', compact('accounts'));
});

Route::get('/mains/{main}', function($id){

	$account  = DB::table('mains')->find($id);

	return view('mains.show', compact('account'));

});
