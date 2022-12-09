<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\User;
use App\Http\Controllers\CgHeadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\workspaceController;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Login and Register Route Controller
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware("guest");
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// untuk show semua url yg bs diakses
Route::get('/', [DashboardController::class, 'index']);
Route::get('/aboutus', [DashboardController::class, 'aboutus']);
Route::get('/discipleship', [DashboardController::class, 'discipleship']);
Route::get('/media', [DashboardController::class, 'media']);
Route::get('/location', [DashboardController::class, 'location']);
Route::get('/service', [DashboardController::class, 'service']);

// untuk admin

// daftar CG
Route::get('/cg', [CgHeadController::class, 'cg']);
Route::post('/cg',[CgHeadController::class, 'store']);

// bikin post
Route::get('/post', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'store']);

// view CRUD user dan cg
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/user', [AdminController::class, 'user']);
Route::get('/admin/cg', [AdminController::class, 'cg']);
Route::get('/admin/post' , [AdminController::class, 'post']);

// CRUD USER CG POST
Route::patch('/admin/user/{user}/role', [AdminController::class, 'role']);
Route::delete('/admin/user/{user}/delete', [AdminController::class, 'delete']);
Route::get('admin/user/{user}/edit', [AdminController::class, 'editUser']);
Route::put('admin/user/{user}', [AdminController::class, 'updateUser']);

Route::get('/admin/post/{post}/edit', [AdminController::class, 'editPost']);
Route::put('/admin/post/{post}', [AdminController::class, 'updatePost']);

route::get('/admin/cg/{cg}/edit', [AdminController::class, 'editCg']);
route::put('/admin/cg/{cg}', [AdminController::class, 'updateCg']);

Route::delete('/admin/post/{post}/delete', [AdminController::class, 'deletePost']);

// setting post


// ini yang bs akses cm yg bs login ->middleware('auth')


// ini component buatan jefer, kalo mo cek nyalain aja lagi route nya -- geri
// Route::get('/button', function () {
    //     return view('buttonView');
// });

// Route::get('/footer', function () {
//     return view('footerView');
// });

// Route::get('/navbar', function () {
//     return view('navbarView');
// });

// Route::get('/content', function () {
//     return view('contentView');
// });