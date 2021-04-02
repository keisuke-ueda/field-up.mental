<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/care', 'care');
Route::view('/contacts_faq', 'contacts_faq');
Route::view('/content', 'content');
Route::view('/edit_member_info', 'edit_member_info');
Route::view('/introduction', 'introduction');
Route::view('/news', 'news');
Route::view('/psycology_test', 'psycology_test');
Route::view('/sign_up', 'sign_up');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
