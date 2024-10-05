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


Route::get('/', fn() => view('pages.index'))->name('index');

Route::get('/news', fn() => view('pages.news.index'))->name('news');
Route::get('/news/{id}', fn($id) => view('pages.news.detail', ['id' => $id]))->name('news.detail');

Route::get('login', [LoginController::class, 'loginPage'])->name('login');
// Route::get('register', [LoginController::class, 'registerPage'])->name('register');
// Route::post('/registerProses', [LoginController::class, 'registerProses'])->name('register.proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/loginStore', [LoginController::class, 'loginStore'])->name('login.proses');


Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/', fn() => view('pages.admin.index'))->name('admin.dashboard');
    Route::get('/user', fn() => view('pages.admin.user'))->name('admin.user');
    Route::get('/services', fn() => view('pages.admin.services'))->name('admin.services');
    Route::get('/faq', fn() => view('pages.admin.faq'))->name('admin.faq');
    Route::get('/contact', fn() => view('pages.admin.contact'))->name('admin.contact');
    Route::get('/account', fn() => view('pages.admin.account'))->name('admin.account');
    Route::get('/messages', fn() => view('pages.admin.messages'))->name('admin.messages');
    Route::get('/news', fn() => view('pages.admin.news.index'))->name('admin.news');
    Route::get('/news/add', fn() => view('pages.admin.news.add'))->name('admin.news.add');
    Route::get('/news/{id}/edit', fn($id) => view('pages.admin.news.edit', ['id' => $id]))->name('admin.news.edit');
});
