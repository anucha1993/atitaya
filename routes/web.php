<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home/index');
// });
// Route::get('/contact', function () {
//     return view('contact/index');
// });

//Home 
Route::get('home',[HomeController::class,'index'])->name('home');
//contact
Route::get('contact',[ContactController::class,'index'])->name('contact');