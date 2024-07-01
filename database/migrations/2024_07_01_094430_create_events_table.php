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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('event_cat_id')->unsigned()->index()->nullable();
            $table->foreign('event_cat_id')->references('id')->on('event_categories')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('event_banner');
            $table->date('event_date');
            $table->time('start_time');
            $table->string('duration');
            $table->string('location');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
