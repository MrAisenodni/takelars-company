<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
