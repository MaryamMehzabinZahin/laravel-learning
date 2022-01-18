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
Route::get('about', 'App\Http\Controllers\User@about');
Route::get('service', 'App\Http\Controllers\User@service');
// Route::get('/web',function(){
//     return view('web',array('data'=>array('vishal','amit')));
// });
Route::view('denied','denied');
Route::group(['middleware'=>['UserCheck']],function()
{
    Route::view('news','news');
});
