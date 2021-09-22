<?php

use Illuminate\Support\Facades\Route;

//追加したコントローラー
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;

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

//laravel 7系　Route::get('/hello', 'HelloController@index');
//Route::get('/hello', [HelloController::class, 'index']);
/* Route::get('/hello', function(){
    return view('hello.index');
}); */