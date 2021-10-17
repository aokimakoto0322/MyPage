<?php

use Illuminate\Support\Facades\Route;

//フロントコントローラー
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Introduction;
use App\Http\Controllers\News;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Confirm;
use App\Http\Controllers\Send;
use App\Http\Controllers\Detail;

//管理コントローラー
use App\Http\Controllers\Admin\Admin;
use App\Http\Controllers\Admin\AdminHome;
use App\Http\Controllers\Admin\Topbanner;
use App\Http\Controllers\Admin\Topbanner2;
use App\Http\Controllers\Admin\Topbanner3;
use App\Http\Controllers\Admin\Topbanneredit;
use App\Http\Controllers\Admin\Topbanneredit2;
use App\Http\Controllers\Admin\Topbannerdelete;
use App\Http\Controllers\Admin\Topbannerdelete2;
use App\Http\Controllers\Admin\Member;
use App\Http\Controllers\Admin\MemberAdd;
use App\Http\Controllers\Admin\MemberAdd2;
use App\Http\Controllers\Admin\MemberDelete;
use App\Http\Controllers\Admin\MemberDelete2;

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

//フロント

Route::get('/', [HomeController::class, 'index']);

Route::get('/introduction', [Introduction::class, 'index']);

Route::get('/news', [News::class, 'index']);

Route::get('/contact', [Contact::class, 'index']);

Route::any('/confirm', [Confirm::class, 'post']);

Route::any('/send', [Send::class, 'post']);

Route::get('/detail', [Detail::class, 'index']);


//管理画面

Route::get('/admin', [Admin::class, 'index']);

Route::post('/admin', [Admin::class, 'post']);

Route::any('/admin/adminhome', [AdminHome::class, 'index']);

Route::get('/admin/topbanner', [Topbanner::class, 'index']);

Route::get('/admin/topbanner2', [Topbanner2::class, 'get']);

Route::get('/admin/topbanner2', [Topbanner2::class, 'index']);

Route::post('/admin/topbanner3', [Topbanner3::class, 'post']);

Route::get('/admin/topbanner3', [Topbanner3::class, 'get']);

Route::get('/admin/topbanneredit', [Topbanneredit::class, 'index']);

Route::post('/admin/topbanneredit2', [Topbanneredit2::class, 'post']);

Route::get('/admin/topbannerdelete', [Topbannerdelete::class, 'index']);

Route::get('/admin/topbannerdelete2', [Topbannerdelete2::class, 'index']);

Route::get('/admin/member', [Member::class, 'index']);

Route::get('/admin/memberadd', [MemberAdd::class, 'index']);

Route::post('/admin/memberadd2', [MemberAdd2::class, 'post']);

Route::get('/admin/memberdelete', [MemberDelete::class, 'index']);

Route::get('/admin/memberdelete2', [MemberDelete2::class, 'index']);


//laravel 7系　Route::get('/hello', 'HelloController@index');
//Route::get('/hello', [HelloController::class, 'index']);
/* Route::get('/hello', function(){
    return view('hello.index');
}); */