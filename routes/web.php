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
    return view('main');
});

//Route Base
/*
Route::get('/test', function(){
   return 'TestMessage';
});
Route::get('/test/{postId?}', function($postId = 1){
    return 'Tes ID  : '. $postId;
})->name('test');
Route::get('posts', function(){
    return redirect()->route('test');
});*/

//Route Controller
/*Route::get('test', 'TestController');*/
Route::get('test', 'TestController@test')->name('test');


//Route Middleware
/*Route::get('dashboard',function(){
  return 'Dashboard';
})->middleware('auth');
Route::get('user/profile',function(){
    return 'User Profile';
})->middleware('auth');*/


//Route Group
Route::group(['middleware'=>'auth'],function(){
    Route::get('dashboard',function(){
        return 'Dashboard';
    });
    Route::get('user/profile',function(){
        return 'User Profile';
    });
});

//Route NameSpace (Controller Namespace)
Route::group(['namespace'=>'Admin'],function(){
    // App/Http/Controller/Admin/
});

// Prefix (URL prefix)
Route::group(['prefix'=>'system'],function(){
    Route::get('show', function(){
       // URL : /system/show
    });
});

Route::get('user/{id?}', 'UserController@show');

Route::resource('resource','ResourceController');
/*Route::resource('resource','ResourceController',['only'=>['index','show','delete']]);
Route::resource('resource','ResourceController',['except'=>['index','show','delete']]);*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
