<?php

use App\Http\Controllers\NewController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/',  function () {
//     return view('welcome');
// })->name('home.index');

Route::get('about', 'App\Http\Controllers\NewController@About')->name('about.index');
Route::get('contact', 'App\Http\Controllers\NewController@Contact')->name('contact.index');
Route::get('registration', 'App\Http\Controllers\NewController@Registration')->name('registration.index');

Route::post('registration', 'App\Http\Controllers\RegisterController@Register')->name('registration');
Route::get('login', 'App\Http\Controllers\NewController@Login')->name('login');
Route::get('logout', [NewController::class, 'logout'])->name('logout');
Route::get('/', [NewController::class, 'Home'])->name('home');
Route::get('order', [NewController::class, 'Order'])->name('Order');
Route::get('/', [NewController::class, 'Productview'])->name('home');
Route::get('productview', [Controller::class, 'Other']);
Route::get('productview', [NewController::class, 'Productv'])->name('view');
Route::post('login', 'App\Http\Controllers\RegisterController@authenticate')->name('authenticate');
Route::get('product', 'App\Http\Controllers\Controller@Product')->name('product');
Route::get('view', 'App\Http\Controllers\NewController@View');
Route::get('view', 'App\Http\Controllers\NewController@Product')->name('view.index');
Route::get('welcome', 'App\Http\Controllers\Controller@Productview');
Route::get('newproduct', 'App\Http\Controllers\NewController@NewProduct')->name('new');
Route::post('order', 'App\Http\Controllers\RegisterController@Other')->name('order');
Route::post('view', 'App\Http\Controllers\RegisterController@NewProduct')->name('new-product');
Route::get('view/{id}', 'App\Http\Controllers\NewController@Destroy')->name('delete');
Route::get('edit/{id}', 'App\Http\Controllers\NewController@Edit')->name('edit');
Route::get('productview/{id}', 'App\Http\Controllers\NewController@Viewproduct')->name('productview');


Route::put('update/{id}', 'App\Http\Controllers\RegisterController@update')->name('update');



