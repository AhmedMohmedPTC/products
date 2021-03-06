<?php
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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



Route::get('viewProd', [ProductController::class, 'viewProd']);
Route::get('/', [ProductController::class, 'showProd']);
Route::get('create',[ProductController::class, 'create']);
Route::post('store', [ProductController::class, 'store']);
Route::get('editProd/{id}',[ProductController::class,'editProd']);
Route::post('update/{id}',[ProductController::class,'update'])->name('update');
Route::get('destroy/{id}', [ProductController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
