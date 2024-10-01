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
        Schema::table('activity_files', function (Blueprint $table) {
            $table->foreign(['activity_id'])->references(['id'])->on('activities')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activity_files', function (Blueprint $table) {
            $table->dropForeign('activity_files_activity_id_foreign');
        });
    }
};
