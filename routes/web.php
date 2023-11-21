<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
// use App\Http\Controllers\DaftarWargaController;
// use App\Http\Controllers\DaftarAdminController;
use App\Http\Controllers\PostManageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;



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
    return view('frontend.index');
})->name('beranda');


Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' =>false,
]);

Route::middleware(['auth'])->group(function () {
    Route::post('/update-profile', 'App\Http\Controllers\UserController@update')->name('user.update');

    Route::get('/blog', 'App\Http\Controllers\PostController@index')->name('blog.index');
});

Route::middleware(['auth', 'can:user'])->group(function () {
    Route::post('/review', 'App\Http\Controllers\ReviewController@store')->name('review.store');
});

Route::middleware(['auth', 'can:admin'])->group(function () {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

    // User Routes
    
    
    // Admin Routes
    
    Route::get('/daftaradmin', 'App\Http\Controllers\DaftarAdminController@index')->name('manage-admin.index');
    
    // Post Routes
    
    Route::get('/managepost', 'App\Http\Controllers\PostManageController@index')->name('managepost.index');
    
    Route::get('/managepost/create', 'App\Http\Controllers\PostManageController@create')->name('managepost.create');
    
    Route::post('/managepost', 'App\Http\Controllers\PostManageController@store')->name('managepost.store');

    Route::post('/managepost/{id}/edit', 'App\Http\Controllers\PostManageController@update')->name('managepost.update');
    
    Route::get('/managepost/{id}', 'App\Http\Controllers\PostManageController@destroy')->name('managepost.destroy');

    
});

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout1');

// Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login1');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
