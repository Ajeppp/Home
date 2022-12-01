<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\User;
use App\Http\Controllers\CgHead;
use App\Http\Controllers\UserController;
use App\Http\Controllers\workspaceController;
use App\Models\User;

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
    return view('home');
});

Route::get('/button', function () {
    return view('buttonView');
});

Route::get('/footer', function () {
    return view('footerView');
});

Route::get('/navbar', function () {
    return view('navbarView');
});

Route::get('/content', function () {
    return view('contentView');
});

Route::get('/discipleship', function () {
    return view('discipleshipView');
});

Route::get('/aboutus', function () {
    return view('aboutusView');
});

Route::get('/joinDiscipleship', function () {
    return view('joinDiscipleshipView');
});

Route::resource('discipleship', UserController::class);

Route::resource('cghead', CgHead::class);

Route::post('/discipleship', [UserController::class, 'store']);