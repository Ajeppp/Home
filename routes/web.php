<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\workspaceController;

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
    return view('homepage');
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

