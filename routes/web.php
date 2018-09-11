<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'NewsController@index')->name('热点新闻');
Route::get('/news/{articleid}', 'NewsController@show')->name('热点新闻');
Route::get('/contact', 'ContactController@index')->name('联系我们');
//文章
Route::get('/article', 'ArticleController@index');
Route::get('/article/{id}', 'ArticleController@show');
//微信消息
Route::any('/wechat', 'WeChatController@serve');

// 邮件预览
Route::get('/mailable', function () {
    return new App\Mail\SendHongBaoMail();
});

// simboss
Route::any('/simboss', 'SimCardController@index');
// abc
Route::any('/abc', 'AbcController@index');
Route::any('/abc/{id}', 'AbcController@show');
