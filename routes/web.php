<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\FormsController;

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
    return view('home', []);
});

Route::get('/dashboard', function () {
    return view('dashboard', []);
});

Route::get('/login', [LoginController::class, 'index']);//->middleware('guest')
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/layanan', [LayananController::class, 'create']);
Route::post('/layanan', [LayananController::class, 'store']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/signup', [SignUpController::class, 'create']);
Route::post('/signup', [SignUpController::class, 'store']);

Route::get('/lapor', [LaporController::class, 'create']);
Route::post('/lapor', [LaporController::class, 'store']);

Route::get('/forms', [FormsController::class, 'index']);