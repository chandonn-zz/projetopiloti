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
Route::get('/home', 'HomeController@updateData')->name('home.update');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin', 'AdminController@showUsers')->name('admin.show');
Route::get('/admin', 'AdminController@updateUser')->name('admin.update');
Route::get('/admin', 'AdminController@deleteUser')->name('admin.delete');
Route::get('/admin', 'AdminController@listDeletedUsers')->name('admin.listDeleted');
