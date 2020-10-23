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

Route::get('/', 'App\Http\Controllers\UsuariosController@index');

Route::get('/singin', 'App\Http\Controllers\UsuariosController@singin');

Route::get('/login', 'App\Http\Controllers\UsuariosController@login');

Route::post('/ingresar', 'App\Http\Controllers\UsuariosController@ingresar');
