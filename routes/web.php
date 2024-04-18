<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('users.pages.index');
})->name('index.get');


Route::get('/view',[AuthController::class,'viewpage'])->name('view.get');
Route::get('/account', [AuthController::class,'accountpage'])->name('account.get');
Route::get('/filter', [AuthController::class, 'filterpage'])->name('filter.get');
Route::get('/message', [AuthController::class, 'messagepage'])->name('message.get');
Route::get('/product-list', [AuthController::class, 'productpage'])->name('product-list.get');
Route::get('/login', [AuthController::class, 'loginpage'])->name('login.get');


Route::post('/register',[AuthController::class,'account'])->name('account.post');
Route::post('/login',[AuthController::class,'login'])->name('login.post');