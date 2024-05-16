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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('grade_id')->unsigned()->index()->nullable();
            $table->string('subject_name');
            $table->string('subject_code');
            $table->integer('credit_hours');
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
