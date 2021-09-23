<?php

use Illuminate\Support\Facades\Route;

//コントローラー
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Introduction;
use App\Http\Controllers\News;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Confirm;
use App\Http\Controllers\Send;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/introduction', [Introduction::class, 'index']);

Route::get('/news', [News::class, 'index']);

Route::get('/contact', [Contact::class, 'index']);

Route::any('/confirm', [Confirm::class, 'post']);

Route::any('/send', [Send::class, 'post']);

//laravel 7系　Route::get('/hello', 'HelloController@index');
//Route::get('/hello', [HelloController::class, 'index']);
/* Route::get('/hello', function(){
    return view('hello.index');
}); */