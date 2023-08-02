<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::resource('companies', CompanyController::class);
Route::resource('Users', UsersController::class);
Route::post('loginFunc', [UsersController::class, 'loginFunc'])->name('login.Func');
Route::post('logoutFunc', [UsersController::class, 'logoutFunc'])->name('logout.Func');
Route::resource('SongsManager', SongsController::class);
Route::resource('UsersManager', AdminController::class);
Route::post('ChangeAccType/{id}', [AdminController::class, 'ChangeAccType'])->name('Admin.ChangeAccType');
Route::get('SearchUser', [AdminController::class, 'SearchUser'])->name('Admin.SearchUser');
Route::get('Home', [UsersController::class, 'Home'])->name('Home.Home');
Route::get('purchase', [UsersController::class, 'purchase'])->name('Home.Purchase');
Route::get('explore', [HomeController::class, 'explore'])->name('SongShow.explore');
Route::get('SongShow/{id}', [HomeController::class, 'SongShow'])->name('SongShow.Song');
Route::get('Search', [HomeController::class, 'Search'])->name('SongShow.Search');
Route::get('download/{id}', [SongsController::class, 'download'])->name('SongShow.download');
Route::get('/SongsManager/CategoryManager', function () {
    return view('SongsManager.CategoryManager');
})->name('SongsManager.CategoryManager');

Route::delete('DestroyCategory/{name}', [SongsController::class, 'DestroyCategory'])->name('Admin.DestroyCategory');

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
})->name('register');