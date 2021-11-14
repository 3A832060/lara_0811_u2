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
//設定Route回傳view
Route::get('/', function () {
    return view('welcome');
});
//設定Route回傳字串
Route::get('/',function(){
    return 'welcome';
});
//設定Route轉跳路由
Route::get('r1',function (){
    return redirect('r2');
});
Route::get('r2',function (){
    return view('welcome');
});
