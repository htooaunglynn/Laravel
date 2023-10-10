<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware;

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
    return redirect('login');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'registerSave'])->name('register.save');

Route::get('/login', [AuthController::class, 'login'])->name('login');

// Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('/login', [AuthController::class, 'loginAction'])->name('login.action');

// Route::controller(AuthController::class)->group(function () {
//     Route::get('/register', 'register')->name('register');
// });

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});