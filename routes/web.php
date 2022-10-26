<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TmpController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', function () {
    return view('vendor.pagination.default');
});



Route::get('/mb51', [TmpController::class, 'w']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);
