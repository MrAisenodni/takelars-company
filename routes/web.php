<?php

use App\Http\Controllers\Admin\Masters\{
    CategoryController,
};
use App\Http\Controllers\Admin\{
    LoginController,
    ProviderController,
};
use App\Http\Controllers\PagesController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Auth;
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

/*
    =====================================
    =       Routes for Front End        =
    =====================================
*/
Route::get('/', [PagesController::class, 'index']);
Route::get('/tentang-kami', [PagesController::class, 'about_us']);
Route::get('/kontak-kami', [PagesController::class, 'contact_us']);
Route::get('/registrasi', [PagesController::class, 'registration']);

/*
    =====================================
    =    Routes for Back End (Admin)    =
    =====================================
*/
Route::resource('/adm-login', LoginController::class);
Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('authcheck')->group(function() {
    Route::get('/adm-dashboard', [PagesController::class, 'dashboard']);
    Route::resource('/adm-provider', ProviderController::class);

    // Section of Master Menu
    Route::resource('/adm-master/kategori', CategoryController::class);
    Route::resource('/adm-master/tag', TagController::class);
    Route::resource('/adm-master/posisi', PositionController::class);
    Route::resource('/adm-master/posisi', PositionController::class);
});