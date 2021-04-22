<?php

if(config('app.env') === 'production'){
    // asset()やurl()がhttpsで生成される
    URL::forceScheme('https');
}

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
Auth::routes();

// ローカル
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/care', 'care');
Route::view('/contacts_faq', 'contacts_faq');
Route::view('/contents_list', 'contents_list');
Route::view('/edit_member_info', 'edit_member_info');
Route::view('/introduction', 'introduction');
Route::view('/news', 'news');
Route::view('/psycology_test', 'psycology_test');
Route::view('/sign_up', 'sign_up');
Route::view('/login', 'login');

Route::get('/contents_list', [App\Http\Controllers\ContentsListController::class, 'show'])-> name('contents_list.show');

Route::get('/psycology_test/egogram', [App\Http\Controllers\EgogramController::class, 'egogram']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//本番

// Route::get('/mental_field-up', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::view('/mental_field-up/care', 'care')->name('care');
// Route::view('/mental_field-up/contacts_faq', 'contacts_faq')->name('contacts_faq');
// Route::view('/mental_field-up/contents_list', 'contents_list')->name('contents_list');
// Route::view('/mental_field-up/edit_member_info', 'edit_member_info')->name('edit_member_info');
// Route::view('/mental_field-up/introduction', 'introduction')->name('introduction');
// Route::view('/mental_field-up/news', 'news')->name('news');
// Route::view('/mental_field-up/psycology_test', 'psycology_test')->name('psycology_test');
// Route::view('/mental_field-up/sign_up', 'sign_up')->name('sign_up');
// Route::view('/mental_field-up/login', 'login')->name('login');

// Route::get('/mental_field-up/psycology_test/egogram', [App\Http\Controllers\EgogramController::class, 'egogram'])->name('egogram');
// Route::get('/mental_field-up/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
