<?php

use App\Http\Controllers\AM\AmDashboardController;
use App\Http\Controllers\AM\SalesOptyController;
use App\Http\Controllers\AM\SalesOrderController;
use App\Http\Controllers\UM\ApprovalController;
use App\Http\Controllers\UM\InputwoController;
use App\Http\Controllers\UM\ListdController;
use App\Http\Controllers\UM\ReportpController;
use App\Http\Controllers\UM\UmDashboardController;
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

// UM
Route::get('/um/dashboard', [UmDashboardController::class,'index']);
Route::get('/approval', [ApprovalController::class,'index']);
Route::get('/detailapproval/{id}', [ApprovalController::class,'show']);
Route::get('/reportp', [ReportpController::class,'index']);
Route::get('/inputwo', [InputwoController::class,'index']);
Route::get('/listd', [ListdController::class,'index']);
// end UM

// AM/SALES
Route::get('/am/dashboard', [AmDashboardController::class,'index']);
Route::get('/slsorder', [SalesOrderController::class,'index']);
Route::get('/slsopty', [SalesOptyController::class,'index']);