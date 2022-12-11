<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomController;

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
Route::get('/tambahmobil', function () {
    return view('showroom/tambahmobil');
});
Route::post('/addmobil',[ShowroomController::class, 'addmobil']);
Route::get('/showroom',[ShowroomController::class, 'index']);
