<?php

// 本番環境ではhttp通信が弾かれるため、httpsに変換する
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contents_list', [App\Http\Controllers\ContentsListController::class, 'show'])-> name('contents_list.show');
Route::get('/care', [App\Http\Controllers\CareController::class, 'show'])-> name('care.show');
Route::get('/contacts_faq', [App\Http\Controllers\ContactsFaqController::class, 'show'])-> name('contacts_faq.show');
Route::get('/edit_member_info', [App\Http\Controllers\EditMemberInfoController::class, 'show'])-> name('edit_member_info.show');
Route::get('/introduction', [App\Http\Controllers\IntroductionController::class, 'show'])-> name('introduction.show');
Route::get('/news', [App\Http\Controllers\NewsController::class, 'show'])-> name('news.show');
Route::get('/psychology_test', [App\Http\Controllers\PsychologyTestController::class, 'show'])-> name('psychology_test.show');

Route::get("/psychology_test/test{page_number}", [App\Http\Controllers\PsychologyTestController::class, 'select'])-> name('psychology_test.select');

Route::get("/psychology_test/egogram", [App\Http\Controllers\EgogramController::class, 'show'])-> name('egogram.show');

Route::get("/contents/contents{page_number}",[App\Http\Controllers\ContentsListController::class, 'select'])->name('contents_list.select');

Route::get('/psycology_test/egogram', [App\Http\Controllers\EgogramController::class, 'show'])->name('egogram.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chat_care', [App\Http\Controllers\ChatController::class, 'login'])->name('chat_care');