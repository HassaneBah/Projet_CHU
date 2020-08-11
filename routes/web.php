<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin/formAdd');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/medecin', function () {
    return view('vitrine.form_medecin');
});
