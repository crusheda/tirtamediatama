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

// Route::get('/laravel', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('pages.user.index');
// });

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
// Route::resource('/', 'WelcomeController');
Auth::routes(); // ['register' => false]

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', 'WelcomeController@index')->name('welcome');
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    // Route::get('/', function () {
    //     return view('pages.user.index');
    // });
    Route::resource('produk', 'admin\produkController');
});
