<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
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
    return redirect('laptop');
});

// Route::resource('laptops', LaptopController::class);

Route::get('/laptop', [LaptopController::class, 'index'])->name('laptop');
Route::get('/laptop/create', [LaptopController::class, 'create'])->name('laptop.create');
// Route::get('/laptop/show', [LaptopController::class, 'show'])->name('laptop.show');
Route::get('/laptop/{laptop}/edit', [LaptopController::class, 'edit'])->name('laptop.edit');

Route::post('/laptop', [LaptopController::class, 'store'])->name('laptop.store');

Route::put('/laptop/{laptop}/update', [LaptopController::class, 'update'])->name('laptop.update');

Route::delete('/laptop/{laptop}/destroy', [LaptopController::class, 'destroy'])->name('laptop.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
