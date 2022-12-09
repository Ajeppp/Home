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

Route::controller(DashboardController::class)->group(function() {
    // untuk show semua url yg bs diakses
    Route::get('/', 'index');
    Route::get('/aboutus', 'aboutus');
    Route::get('/discipleship', 'discipleship');
    Route::get('/discipleship/{cg}', 'chooseCg');
    Route::get('/media', 'media');
    Route::get('/location', 'location');
    Route::get('/service', 'service');
});


// KHUSUS ADMIN // 
Route::middleware('auth')->controller(CgHeadController::class)->group(function() {

    // DAFTARIN CG
    Route::get('/cg',  'cg');
    Route::post('/cg', 'store');    
});

// jangan lupa kasi middlware auth
Route::middleware('auth')->controller(PostController::class)->group(function() {

    // BIKIN POST
    Route::get('/post', 'index');
    Route::post('/post', 'store');
});

// jangan lupa kasi middleware auth
Route::middleware('auth')->controller(AdminController::class)->group(function() {

    // VIEW ADMIN
    Route::get('/admin', 'index');
    Route::get('/admin/user', 'user');
    Route::get('/admin/cg', 'cg');
    Route::get('/admin/post' , 'post');
    
    // MAKE ADMIN, EDIT, DELETE USER
    Route::patch('/admin/user/{user}/role', 'role');
    Route::delete('/admin/user/{user}/delete', 'delete');
    Route::get('admin/user/{user}/edit', 'editUser');
    Route::put('admin/user/{user}', 'updateUser');
    
    // EDIT, UPDATE, DELETE POST
    Route::get('/admin/post/{post}/edit', 'editPost');
    Route::put('/admin/post/{post}', 'updatePost');
    Route::delete('/admin/post/{post}/delete', 'deletePost');
    
    // EDIT, UPDATE CG
    route::get('/admin/cg/{cg}/edit', 'editCg');
    route::put('/admin/cg/{cg}', 'updateCg');
    
});
// KHUSUS ADMIN //