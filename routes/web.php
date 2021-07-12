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

Route::get("/contents/co_sec{page_number}",[App\Http\Controllers\ContentsListController::class, 'select'])->name('contents_list.select');
Route::get("/contents/content{page_number}",[App\Http\Controllers\ContentsController::class, 'select'])->name('contents_sec.select');

Route::get('/psycology_test/egogram', [App\Http\Controllers\EgogramController::class, 'show'])->name('egogram.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chat_care_login', [App\Http\Controllers\ChatCareController::class, 'login'])->name('chat_care.login');

Route::get('/chat_care_auth', [App\Http\Controllers\ChatCareController::class, 'auth'])->name('chat_care.auth');

Route::get('/chat_care_chat', [App\Http\Controllers\ChatCareController::class, 'chat'])->name('chat_care.chat');

Route::post('/chat_care_chat/add', [App\Http\Controllers\ChatCareController::class, 'add'])->name('chat_care.add');
Route::get('/result/ajax', [App\Http\Controllers\ChatCareController::class, 'getData']);

// 作成中ページ　by並木
Route::get('/making_now', [App\Http\Controllers\MakingNowController::class, 'show'])-> name('making_now.show');