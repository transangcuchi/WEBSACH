<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

// Route::get('/edit/{id}', [Book::class, 'edit'])->name('edit');
// Route::get('/create', [Book::class, 'create'])->name('create');

Route::get('/', [BookController::class, 'index'])->name('index');
Route::get('/book/{id}', [BookController::class, 'show'])->name('detail');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/user.login', [LoginController::class, 'show'])->name('user.login');
// Route::post('/', [Book::class, 'store'])->name('store');
// Route::patch('/{id}', [Book::class, 'update'])->name('update');
// Route::delete('/{id}', [Book::class, 'destroy'])->name('delete');

Route::get('/admin', [AdminController::class, 'index'])->name('adminindex');
Route::get('/admin/{id}', [AdminController::class, 'show'])->name('adminshow');
