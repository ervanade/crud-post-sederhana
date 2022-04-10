<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

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
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');

Route::group(['middleware' => ['auth', 'ceklevel:admin,user', 'preventback']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/posts', \App\Http\Controllers\PostController::class);
    Route::get('/myposts', [PostController::class, 'myposts'])->name('myposts');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin', 'preventback']], function () {
    Route::get('/usermanajemen', [UserController::class, 'index'])->name('usermanajemen');
    Route::get('/user/tambah', [UserController::class, 'create'])->name('tambahuser');
    Route::post('/user/tambahuser', [UserController::class, 'store'])->name('tambahuser');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('edituser');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('updateuser');
    Route::put('/user/resetpassword/{id}', [UserController::class, 'resetpassword'])->name('resetpassword');
    Route::delete('/user/hapus/{id}', [UserController::class, 'destroy'])->name('deleteuser');
});
Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
});
