<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/admin')->namespace('Admin')->group(function() {

    Route::match(['get', 'post'], '/login', [AdminController::class, 'login']);

    Route::group(['middleware'=> ['admin']], function(){

        Route::match(['get', 'post'], '/update-admin-details', [AdminController::class, 'updateAdminDetails']);
        Route::match(['get', 'post'], '/update-admin-pwd', [AdminController::class, 'updateAdminPwd']);
        Route::get('/logout', [AdminController::class, 'logout']);
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::post('/check-current-pwd', [AdminController::class, 'checkCurrentPwd']);


        Route::get('categories', [CategoriesController::class, 'categories']);
        Route::match(['get', 'post'], 'add-edit-category/{id?}', [CategoriesController::class, 'addEditCategory']);
        Route::get('/delete-category/{id}', [CategoriesController::class, 'deleteCategory']);
         Route::get('/delete-category-image/{id}', [CategoriesController::class, 'deleteCategoryImage']);
        Route::post('/update-category-status', [CategoriesController::class, 'updateCategoryStatus']);
});


   

});
