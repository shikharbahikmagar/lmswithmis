<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Admin\GradesController;
use App\Http\Controllers\Admin\SubjectsController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\TeacherScheduleController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\NoticesController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LibraryController;
use App\Http\Controllers\Admin\BookRequestsController;

//teaherssdfa
use App\Http\Controllers\Teacher\TeacherController;
//student
use App\Http\Controllers\Student\StudentController;

/*-
|-------------------------------------------------------------------------
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
        Route::match(['get', 'post'], '/add-subject/{id?}', [SubjectsController::class, 'addSubject'] );
        Route::match(['get', 'post'], '/edit-subject/{id}', [SubjectsController::class, 'editSubject']);
        Route::get('delete-subject/{id}', [SubjectsController::class, 'deleteSubject']);
        Route::post('update-subject-status', [SubjectsController::class, 'updateSubjectStatus']);

        //teachers
        Route::get('/teachers', [TeachersController::class, 'teachers']);
        Route::match(['get', 'post'], 'add-edit-teacher/{id?}', [TeachersController::class, 'addEditTeacher']);
        Route::post('update-teacher-status', [TeachersController::class, 'updateTeacherStatus']);
        Route::get('delete-teacher/{id}', [TeachersController::class, 'deleteTeacher']);
        Route::match(['get', 'post'], '/update-teacher-pwd/{id}', [TeachersController::class, 'updateTeacherPwd']);
        Route::post('/check-teacher-current-pwd', [TeachersController::class, 'chkCurrentTeacherPwd']);
        
        //teacher schedules
        Route::match(['get', 'post'], '/teacher-schedules', [TeacherScheduleController::class, 'teacherSchedule']);
        Route::match(['get', 'post'], '/add-teacher-schedule/{id}', [TeacherScheduleController::class, 'addTeacherSchedule']);
        Route::match(['get', 'post'], '/edit-teacher-schedule/{id}', [TeacherScheduleController::class, 'editTeacherSchedule']);
        Route::post('/update-teacher-schedule-status', [TeacherScheduleController::class, 'updateTeacherScheduleStatus']);
        Route::post('/show-subjects-for-add', [TeacherScheduleController::class, 'showSubjectsForAdd']);
        Route::post('/show-subjects-for-edit', [TeacherScheduleController::class, 'showSubjectsForEdit']);
        Route::get('/delete-teacher-schedule/{id}', [TeacherScheduleController::class, 'deleteTeacherSchedule']);

        //students
        Route::match(['get', 'post'], '/students', [StudentsController::class, 'students']);
        Route::match(['get', 'post'], '/add-students/{id?}', [StudentsController::class, 'addStudent']);
        Route::match(['get', 'post'], '/edit-student/{id?}', [StudentsController::class, 'editStudent']);
        Route::get('/update-student-pwd/{id?}', [StudentsController::class, 'updateStudentPwd']);
        Route::post('/check-student-current-pwd', [StudentsController::class, 'chkStudentCurrentPwd']);
        Route::post('update-student-status', [StudentsController::class, 'updateStudentStatus']);
        Route::post('/update-student-pwd/{id?}', [StudentsController::class, 'updateStudentPwd']);
        Route::get('/delete-student/{id}', [StudentsController::class, 'deleteStudent']);

        //notice category
        Route::get('/notice-categories', [NoticesController::class, 'noticeCategories']);
        Route::match(['get', 'post'], '/add-edit-notice-category/{id?}', [NoticesController::class, 'addEditNoticeCategory']);
        Route::post('/update-notice-category-status', [NoticesController::class, 'updateNoticeCategoryStatus']);
        Route::get('/delete-notice-category/{id}', [NoticesController::class, 'deleteNoticeCategory']);

        //notices
        Route::match(['get', 'post'], '/notices', [NoticesController::class, 'notices']);
        Route::get('/view-notice-details/{id}', [NoticesController::class, 'viewNoticeDetails']);
        Route::match(['get', 'post'], '/add-edit-notices/{id?}', [NoticesController::class, 'AddEditNotice']);
        Route::post('/update-notice-status', [NoticesController::class, 'updateNoticeStatus']);
        Route::get('/delete-notice/{id}', [NoticesController::class, 'deleteNotice']);

        //banners
        Route::get('/banners', [BannersController::class, 'banners']);
        Route::match(['get', 'post'], '/add-edit-banner/{id?}', [BannersController::class, 'addEditBanners']);
        Route::post('/update-banner-status', [BannersController::class, 'updateBannerStatus']);
        Route::get('/delete-banner/{id}', [BannersController::class, 'deleteBanner']);

        //event categories
        Route::get('/event-categories', [EventsController::class, 'eventCategories']);
        Route::match(['get', 'post'], 'add-edit-event-category/{id?}', [EventsController::class, 'addEditEventCategory']);
        Route::post('/update-event-category-status', [EventsController::class, 'updateEventCategoryStatus']);
        Route::get('/delete-event-category/{id}', [EventsController::class, 'deleteEventCategory']);

        //events
        Route::get('/events', [EventsController::class, 'events']);
        Route::match(['get', 'post'], 'add-edit-event/{id?}', [EventsController::class, 'addEditEvent']);
        Route::get('/delete-event/{id?}', [EventsController::class, 'deleteEvent']);
        Route::post('/update-event-status', [EventsController::class, 'updateEventStatus']);

        //book requests
        Route::get('/book-requests', [BooksController::class, 'bookRequests']);
        Route::match(['get', 'post'], '/update-book-request/{id}', [BookRequestsController::class, 'updateBookRequest']);
});
});

//for teachers
Route::prefix('/teacher')->namespace('Teacher')->group(function() {

    Route::match(['get', 'post'], '/login', [TeacherController::class, 'login']);

    Route::group(['middleware'=> ['teacher']], function(){

        Route::get('/dashboard', [TeacherController::class, 'dashboard']);
        Route::get('/logout', [TeacherController::class, 'logout']);
    
        Route::match(['get', 'post'], 'edit-teacher/{id?}', [TeacherController::class, 'EditTeacher']);
        Route::get('view-details/{id}', [TeacherController::class, 'viewDetails']);
        Route::match(['get', 'post'], '/update-teacher-pwd/{id}', [TeacherController::class, 'updateTeacherPwd']);
        Route::post('/check-teacher-current-pwd', [TeacherController::class, 'chkCurrentTeacherPwd']);
        
        //teacher schedules
        Route::match(['get', 'post'], '/teacher-schedules', [TeacherController::class, 'teacherSchedule']);

    });
});

//routes for students
Route::prefix('/student')->namespace('Student')->group(function() {

    Route::match(['get', 'post'], '/login', [StudentController::class, 'login']);

    Route::group(['middleware'=> ['student']], function(){

        Route::get('/dashboard', [StudentController::class, 'dashboard']);
        Route::get('/logout', [StudentController::class, 'logout']);
                //teachers
        Route::get('/students', [StudentController::class, 'students']);
        Route::match(['get', 'post'], 'edit-teacher/{id?}', [StudentController::class, 'EditTeacher']);
        Route::get('view-details/{id}', [StudentController::class, 'viewDetails']);
        Route::match(['get', 'post'], '/update-teacher-pwd/{id}', [StudentController::class, 'updateTeacherPwd']);
        Route::post('/check-teacher-current-pwd', [StudentController::class, 'chkCurrentTeacherPwd']);
        
        //teacher schedules
        Route::match(['get', 'post'], '/teacher-schedules', [StudentController::class, 'teacherSchedule']);


    });
});

Route::group(['middleware'=> ['student']], function() {

    //request for book
    Route::post('/book-request/{id}', [BookRequestsController::class, 'bookRequest']);
    //view user profile
    Route::get('/user-profile', [IndexController::class, 'userProfile']);
    //update user profile
    Route::post('/student/update-details/{id}', [StudentController::class, 'updateDetails']);
    //check current password
    Route::post('/student/check-current-pwd', [StudentController::class, 'checkCurrentPwd']);
    //update password
    Route::post('/student/update-password/{id}', [StudentController::class, 'updatePassword']);
    //view student id card
    Route::get('/student-id-card', [StudentController::class, 'studentIdCard']);
    //download student id card
    Route::get('/download-id-card', [StudentController::class, 'downloadIdCard']);
});


Route::get('/', [IndexController::class, 'index']);

Route::get('/about-us', [IndexController::class, 'aboutUs']);

Route::get('/library', [LibraryController::class, 'library']);

Route::post('/show-filtered-notices', [IndexController::class, 'index']);

Route::get('/notice/{url}', [IndexController::class, 'notice']);

//view book details
Route::get('/books/{id}', [LibraryController::class, 'bookDetails']);