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
        Schema::table('initiatives', function (Blueprint $table) {
            $table->foreign(['initiative_pipeline_id'])->references(['id'])->on('initiative_pipelines')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['initiative_pipeline_stage_id'])->references(['id'])->on('initiative_pipeline_stages')->onUpdate('no action')->onDelete('set null');
            $table->foreign(['initiative_source_id'])->references(['id'])->on('initiative_sources')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['initiative_type_id'])->references(['id'])->on('initiative_types')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['person_id'])->references(['id'])->on('persons')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('initiatives', function (Blueprint $table) {
            $table->dropForeign('initiatives_initiative_pipeline_id_foreign');
            $table->dropForeign('initiatives_initiative_pipeline_stage_id_foreign');
            $table->dropForeign('initiatives_initiative_source_id_foreign');
            $table->dropForeign('initiatives_initiative_type_id_foreign');
            $table->dropForeign('initiatives_person_id_foreign');
            $table->dropForeign('initiatives_user_id_foreign');
        });
    }
};
