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
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admin_id')->unsigned()->index()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->bigInteger('notice_cat_id')->unsigned()->index()->nullable();
            $table->foreign('notice_cat_id')->references('id')->on('notice_categories')->onDelete('cascade');
            $table->text('title');
            $table->string('link')->nullable();
            $table->longText('description');
            $table->string('attachment')->nullable();
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notices');
    }
};
