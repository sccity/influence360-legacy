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
        Schema::table('initiative_activities', function (Blueprint $table) {
            $table->foreign(['activity_id'])->references(['id'])->on('activities')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['initiative_id'])->references(['id'])->on('initiatives')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('initiative_activities', function (Blueprint $table) {
            $table->dropForeign('initiative_activities_activity_id_foreign');
            $table->dropForeign('initiative_activities_initiative_id_foreign');
        });
    }
};
