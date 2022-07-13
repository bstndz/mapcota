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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/preguntas', function () {
    return view('preguntas');
});

Route::get('/cobertura', function () {
    return view('cobertura');
});

Route::get('/legal', function () {
    return view('legal');
});

Route::get('/eleccion', function () {
    return view('eleccion');
});

Route::resource('admins', App\Http\Controllers\AdminController::class);

Route::resource('clientes', App\Http\Controllers\ClienteController::class);

Route::resource('mapcotas', App\Http\Controllers\MapcotaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
