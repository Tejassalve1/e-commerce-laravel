<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [usercontroller::class,'login'] );
Route::get('/', [productcontroller::class,'index'] );
Route::get('detail/{id}', [productcontroller::class,'detail'] );
Route::get('/search', [productcontroller::class,'search'] );
Route::post('/add_to_cart', [productcontroller::class,'addtocart'] );
Route::get('/cartlist', [productcontroller::class,'cartList'] );
Route::get('removecart/{id}', [productcontroller::class,'removeCart'] );
