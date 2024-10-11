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
        Schema::create('bill_file_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('bill_file_id');
            $table->unsignedInteger('activity_id');
            $table->timestamps();

            $table->foreign('bill_file_id')->references('id')->on('bill_files')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_file_activities');
    }
};
