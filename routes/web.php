<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('/dashboard', 'App\Http\Controllers\DashController@index')->name('dashboard');
Route::get('/pesan/{id}', 'App\Http\Controllers\PesanController@index')->name('pesan');

Route::post('pesan/{id}', 'App\Http\Controllers\PesanController@pesan');


require __DIR__.'/auth.php';
