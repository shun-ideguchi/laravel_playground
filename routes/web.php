<?php

use App\Http\Controllers\{
    Admin\LoginController as AdminLoginController,
    Admin\RegisterController as AdminRegisterController,
};
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
    return view('welcome');
});

Auth::routes();

// user
// configure guards default settings
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm']);
    Route::get('/register', [AdminRegisterController::class, 'showRegistrationForm']);
    Route::post('/register', [AdminRegisterController::class, 'register'])->name('register');
    Route::middleware('auth:admin')->group(function () {
        // Route::
    });
});
