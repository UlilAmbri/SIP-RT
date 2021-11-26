<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\LoginAdminController;

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

Route::get('/content', function () {
    return view('dashboardadmin', []);
});

Route::group([
    'prefix'=>config('admin.prefix'),
    'namespace'=>'App\\Http\\Controllers',
],function () {

    Route::get('/loginadmin','LoginAdminController@formLogin')->name('admin.login');
    Route::post('/loginadmin','LoginAdminController@login');

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout','LoginAdminController@logout')->name('admin.logout');
        Route::view('/','dashboardadmin')->name('dashboardadmin');
        Route::view('/post','data-post')->name('post')->middleware('can:role,"admin","editor"');
        Route::view('/admin','data-admin')->name('admin')->middleware('can:role,"admin"');
    });
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