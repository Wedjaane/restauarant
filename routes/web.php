<?php

use App\Http\Controllers\HomeController;
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
    return view('home');
});
Route::get('/h', function () {
    return view('about');
});
Route::get('/cc', function () {
    return view('prendre_comm');
});
Route::get('/p', function () {
    return view('pass_commande');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/s', function () {
    return view('special');
});
Route::get("/home",[HomeController::class,"index"]);
