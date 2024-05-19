<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\GradesController;
use App\Http\Controllers\Admin\SubjectsController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Admin\TeachersController;

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

        //categories
        Route::get('categories', [CategoriesController::class, 'categories']);
        Route::match(['get', 'post'], 'add-edit-category/{id?}', [CategoriesController::class, 'addEditCategory']);
        Route::get('/delete-category/{id}', [CategoriesController::class, 'deleteCategory']);
        Route::get('/delete-category-image/{id}', [CategoriesController::class, 'deleteCategoryImage']);
        Route::post('/update-category-status', [CategoriesController::class, 'updateCategoryStatus']);

        //books
        Route::get('books', [BooksController::class, 'books']);
        Route::match(['get', 'post'], 'add-edit-book/{id?}', [BooksController::class, 'addEditBooks']);
        Route::post('update-book-status', [BooksController::class, 'updateBookStatus']);
        Route::get('delete-book/{id}', [BooksController::class, 'deleteBook']);

        //classes
        Route::get('/grades', [GradesController::class, 'grades']);
        Route::match(['get', 'post'], 'add-edit-grade/{id?}', [GradesController::class, 'addEditGrades']);
        Route::post('update-grade-status', [GradesController::class, 'updateGradeStatus']);
        Route::get('delete-grade/{id}', [GradesController::class, 'deleteGrade']);

        //subjects
        Route::match(['get', 'post'], '/subjects', [SubjectsController::class, 'subjects']);
        Route::match(['get', 'post'], '/add-subjects', [SubjectsController::class, 'addSubject'] );
        Route::match(['get', 'post'], '/edit-subject/{id}', [SubjectsController::class, 'editSubject']);
        Route::get('delete-subject/{id}', [SubjectsController::class, 'deleteSubject']);
        Route::post('update-subject-status', [SubjectsController::class, 'updateSubjectStatus']);

        //teachers
        Route::get('/teachers', [TeachersController::class, 'teachers']);
        Route::match(['get', 'post'], 'add-edit-teacher/{id?}', [TeachersController::class, 'addEditTeacher']);
        Route::post('update-teacher-status', [TeachersController::class, 'updateTeacherStatus']);
        Route::get('delete-teacher/{id}', [TeachersController::class, 'deleteTeacher']);
});
});


   
