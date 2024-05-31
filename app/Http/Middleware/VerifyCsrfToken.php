<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        "/admin/check-current-pwd", "/admin/update-category-status", "/admin/update-book-status",
        "/admin/update-grade-status", "/admin/subjects", "/admin/update-subject-status", 
        "/admin/update-teacher-status", "/admin/check-teacher-current-pwd", "/admin/teacher-schedules",
         "/admin/show-subjects-for-add", "/admin/show-subjects-for-edit", "/admin/students", "/admin/check-student-current-pwd",
         "/admin/update-student-status", "/admin/update-teacher-schedule-status", "/admin/update-notice-category-status", "/admin/notices",
         "/admin/update-notice-status",
    ];
}
