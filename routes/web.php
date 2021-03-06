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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test/{id}', function ($id) {
//     echo $id;
//     return view('first');
// });
Route::get('user_home', 'App\Http\Controllers\User@index');
Route::get('home', 'App\Http\Controllers\User@index');
Route::post('formsubmit','App\Http\Controllers\Form@index');
Route::view('page','page');
Route::view('page2','page2');
Route::view('my_form','form');

// Route::get('/web',function(){
//     return view('web',array('data'=>array('vishal','amit')));
// });
Route::view('denied','denied');
Route::get('session_set','App\Http\Controllers\User@session_set');
Route::get('session_get','App\Http\Controllers\User@session_get');
Route::get('session_remove','App\Http\Controllers\User@session_remove');
Route::group(['middleware'=>['UserCheck']],function()
{
    Route::view('news','news');
});
Route::view('login','login');
Route::post('usersubmit','App\Http\Controllers\User@usersubmit');
Route::get('/logout',function() {
    session()->forget('name');
    session()->flash('error','logout');
    return redirect('login');
});
Route::group(['middleware'=>['UserAuth']],function()
{
    Route::get('about', 'App\Http\Controllers\User@about');
});


Route::get('select','App\Http\Controllers\Db_test@select');
Route::get('insert','App\Http\Controllers\Db_test@insert');
Route::get('update','App\Http\Controllers\Db_test@update');
Route::get('delete','App\Http\Controllers\Db_test@delete');
Route::get('index','App\Http\Controllers\UserProfile@index');