<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Routing\RouteSignatureParameters;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WelcomeController;



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

Route::get('/main', function () {
    return view('main');
});

Route::post('/', 'App\Http\Controllers\MainController@exit');
Route::resource('main', MainController::class);

// Route::get('/login', function () {
//     return view('login');
// });

// Route::post('/login', 'App\Http\Controllers\LoginController@login');


// Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

// Route::get('/login', [LoginController::class, 'index'])->name('index');
// Route::post('/login', [LoginController::class, 'login'])->name('login');

// Route::get('/main', [MainController::class, 'main'])->name('main')->middleware('auth');
// // Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('auth');

