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

Route::get('/test', function () {
  $user=\App\User::create([
      'name'=>'qwe150840',
      'password'=>'asd2007123',
      'email'=>'qwe150840@gmail.com'
  ]);
  dd($user);
});



Route::get('/login', function () {
   return view('login');    
});

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login', 'LoginController@login')->name('login');
