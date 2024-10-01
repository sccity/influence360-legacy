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
        Schema::table('initiative_pipeline_stages', function (Blueprint $table) {
            $table->foreign(['initiative_pipeline_id'])->references(['id'])->on('initiative_pipelines')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('initiative_pipeline_stages', function (Blueprint $table) {
            $table->dropForeign('initiative_pipeline_stages_initiative_pipeline_id_foreign');
        });
    }
};
