<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/admins', [AdminController::class, 'index']);
Route::post('/admins', [AdminController::class, 'adminsPost'])->name('admins.store');

Route::get('/about', function(){
    return view('about');
});

Route::get('/home', function(){
    return view('home');
});
