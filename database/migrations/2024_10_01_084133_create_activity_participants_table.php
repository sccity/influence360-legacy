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
        Schema::create('activity_participants', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activity_id')->index('activity_participants_activity_id_foreign');
            $table->unsignedInteger('user_id')->nullable()->index('activity_participants_user_id_foreign');
            $table->unsignedInteger('person_id')->nullable()->index('activity_participants_person_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_participants');
    }
};
