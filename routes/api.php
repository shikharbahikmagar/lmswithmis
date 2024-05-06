<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::match(['get', 'post'], '/update-admin-details', [AdminController::class, 'updateAdminDetails']);
Route::prefix('/admin')->namespace('Admin')->group(function() {

    Route::match(['get', 'post'], '/login', [AdminController::class, 'login']);

    Route::group(['middleware'=> ['admin']], function(){

        Route::match(['get', 'post'], '/update-admin-details', [AdminController::class, 'updateAdminDetails']);
        Route::match(['get', 'post'], '/update-admin-pwd', [AdminController::class, 'updateAdminPwd']);
        Route::get('/logout', [AdminController::class, 'logout']);
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::post('/check-current-pwd', [AdminController::class, 'checkCurrentPwd']);

});

});
