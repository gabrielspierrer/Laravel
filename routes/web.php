<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\AutoController;
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

Route::get('/welcome', function () {
    return 'Hola Mundo desde welcome';
});

Route::get('/welcome2', function () {
    return 'Desde Welcome 2';
});

Route::get('/saludar/{name}/{lastName}', function ($name, $lastName) {
    return 'Hola ' . $name . ' '. $lastName;
});

Route::get('index', [HomeController::class, 'index']);

Route::get('show', [HomeController::class, 'show']);

Route::get('motos', [MotoController::class, 'index']);

Route::get('autos', [AutoController::class, 'index']);