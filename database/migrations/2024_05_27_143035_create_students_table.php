<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('gender');
            $table->date('dob');
            $table->string('parent_name');
            $table->string('parent_contact');
            $table->date('admission_date');
            $table->bigInteger('grade_id')->unsigned()->index()->nullable();
            $table->integer('roll_no');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('student_image');
            $table->tinyInteger('status');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
