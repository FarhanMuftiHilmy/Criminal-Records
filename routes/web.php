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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/criminal-records', function () {
//     return view('criminals');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/help', function () {
//     return view('help');
// });

Route::get('/', 'BerandaController@welcome');
Route::get('/instalasi_laravel', 'BerandaController@instalasi_laravel');
Route::get('/about', 'BerandaController@about');
Route::get('/help', 'BerandaController@help');
Route::get('/criminal_records', 'BerandaController@criminal_records');
Route::get('/criminal', 'CriminalController@index');
Route::get('/criminal/create', 'CriminalController@create')->name('criminal.create');
Route::post('/criminal', 'CriminalController@store')->name('criminal.store');
Route::get('/criminal/edit/{id}', 'CriminalController@edit')->name('criminal.edit');
Route::post('/criminal/update/{id}', 'CriminalController@update')->name('criminal.update');
Route::post('/criminal/destroy/{id}', 'CriminalController@destroy')->name('criminal.destroy');
Route::get('/criminal/search', 'CriminalController@search')->name('criminal.search');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
