<?php

use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputwoController;
use App\Http\Controllers\ListdController;
use App\Http\Controllers\ReportpController;
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
    return view('index');
});

// route::get('/order', [IndexController::class, 'index'])->name('order');

Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/approval', [ApprovalController::class,'index']);
Route::get('/reportp', [ReportpController::class,'index']);
Route::get('/inputwo', [InputwoController::class,'index']);
Route::get('/listd', [ListdController::class,'index']);