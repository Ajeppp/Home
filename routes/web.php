<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\User;
use App\Http\Controllers\CgHead;
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

// Route::get("/", [UserController::class, 'main']);
// Function untuk menampilkan halaman
// Route::get('/', [UserController::class, 'main'])->middleware('auth');

// Route::get('/', function() {
//     return view('loginView');
// });

// Route::post('/', [UserController::class, 'loginAuth']);

// Route::get('home', [UserController::class, 'main'])->middleware('auth');

Route::get('/aboutus', function () {
    return view('aboutusView');
});

Route::get('/discipleship', [UserController::class, 'index']);
// Route::get('/joinDiscipleship', [UserController::class, 'joinDiscipleship']);
// Route::get('/cg', [UserController::class, 'viewCg']);
// Route::get('/', [UserController::class, 'login']);

// Function untuk handle post request
// Route::post('/', [UserController::class, 'store']);
// Route::post('/', [UserController::class, 'loginAuth']);


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




// Route::resource('discipleship', UserController::class);
// Route::resource('cghead', CgHead::class);

// Login Controller

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index']);