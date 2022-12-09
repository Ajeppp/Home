<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\User;
use App\Http\Controllers\CgHeadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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

// untuk admin daftar cg
Route::get('/cg', [CgHeadController::class, 'cg']);
Route::post('/cg',[CgHeadController::class, 'store']);


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