<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/
// маршруты для вывода категорий и новостей
Route::get('/blog/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');

// группа для маршрутов административной части
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
   Route::get('/', 'DashboardController@dashboard')->name('admin.index');
   // маршрут для категорий
   Route::resource('/category', 'CategoryController', ['as'=>'admin']);
   // маршрут для новостей
   Route::resource('/article', 'ArticleController', ['as'=>'admin']);
   //групповой маршрут для пользователей вложеный в админчасть
   Route::group(['prefix' => 'user_managment', 'namespace' => 'UserManagment'], function() {
     Route::resource('/user', 'UserController', ['as' => 'admin.user_managment']);
   });
});

Route::get('/', function () {
    return view('blog.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
