<?php

use App\Book;
use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Symfony\Component\Console\Input\Input;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\Admin\SanphamController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\OrderController;

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

Route::get('/search',[BookController::class,'search'])->name('search');
Route::get('/category/{name}',[BookController::class,'bookByCategory'])->name('category');
Route::get('/book/{id}', [BookController::class, 'show'])->name('detail');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/user.login', [LoginController::class, 'show'])->name('user.login');
// Route::post('/', [Book::class, 'store'])->name('store');
// Route::patch('/{id}', [Book::class, 'update'])->name('update');
// Route::delete('/{id}', [Book::class, 'destroy'])->name('delete');
Route::get('/destroy', [CartController::class,'clearcart'])->name('destroy');
Route::get('/cart', [CartController::class, 'index'])->name('cartindex');
Route::get('/cart/{id}', [CartController::class, "create"])->name('cartuser');
Route::get('/cart/edit/{id}', [CartController::class, "edit"])->name('editcart');

Route::prefix('admin')->group(function(){
    Route::get('login',[AuthController::class,'Login'])->name('adminlogin');

    Route::post('login',[AuthController::class,'CheckLogin'])->name('adminchecklogin');
});

Route::prefix('admin')->middleware('adminlogin')->group(function () {

    Route::get('logout',[AuthController::class,'LogOut'])->name('adminlogout');

    Route::get('dashboard', [DashboardController::class, 'Index'])->name('admindashboard');
    Route::get('sanpham', [SanphamController::class, 'Index'])->name('sanpham');
    Route::get('themsanpham', [SanphamController::class, 'AddSanPham'])->name('themsanpham');
    Route::post('store-sanpham', [SanphamController::class, 'StoreSanpham'])->name('storesanpham');
    Route::get('edit-sanpham-{id}', [SanphamController::class, 'EditSanpham'])->name('editsanpham');
    Route::post('update-sanpham', [SanphamController::class, 'UpdateSanpham'])->name('updatesanpham');
    Route::get('xoa-sanpham-{id}', [SanphamController::class, 'XoaSanpham'])->name('xoasanpham');
    Route::get('edit-hinh-sanpham-{id}', [SanphamController::class, 'EditHinhSanpham'])->name('edithinhsanpham');
    Route::post('update-hinh-sanpham', [SanphamController::class, 'UpdateHinh'])->name('updatehinhsanpham');
});

Route::get('/cart', [CartController::class, 'index'])->name('cartindex');
Route::get('/cart/{id}', [CartController::class, "create"])->name('cartuser');
Route::get('cart/destroy', [CartController::class,"clearcart"])->name('clearcart');

Route::fallback([FallbackController::class, 'index']);

route::get('/thanhtoan', [OrderController::class, 'Index'])->name('thanhtoan');
Route::post('/storedonhang',[OrderController::class, 'StoreDonhang'])->name('storedonhang');
