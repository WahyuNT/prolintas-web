<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('pages.index');
});


Route::get('login', [LoginController::class, 'login'])->name('login');

Route::prefix('admin')->group(function () {

    Route::get('/', fn() => view('pages.admin.index'))->name('admin.dashboard');
    Route::get('/services', fn() => view('pages.admin.services'))->name('admin.services');
    Route::get('/news', fn() => view('pages.admin.news'))->name('admin.news');
    Route::get('/faq', fn() => view('pages.admin.faq'))->name('admin.faq');
    Route::get('/account', fn() => view('pages.admin.account'))->name('admin.account');
});
