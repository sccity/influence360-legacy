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
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('type');
            $table->text('comment')->nullable();
            $table->json('additional')->nullable();
            $table->dateTime('schedule_from')->nullable();
            $table->dateTime('schedule_to')->nullable();
            $table->boolean('is_done')->default(false);
            $table->unsignedInteger('user_id')->index('activities_user_id_foreign');
            $table->timestamps();
            $table->string('location')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
