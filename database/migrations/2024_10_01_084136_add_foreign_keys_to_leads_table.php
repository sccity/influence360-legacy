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
        Schema::table('leads', function (Blueprint $table) {
            $table->foreign(['lead_pipeline_id'])->references(['id'])->on('lead_pipelines')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['lead_pipeline_stage_id'])->references(['id'])->on('lead_pipeline_stages')->onUpdate('no action')->onDelete('set null');
            $table->foreign(['lead_source_id'])->references(['id'])->on('lead_sources')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['lead_type_id'])->references(['id'])->on('lead_types')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['person_id'])->references(['id'])->on('persons')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['user_id'])->references(['id'])->on('users')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropForeign('leads_lead_pipeline_id_foreign');
            $table->dropForeign('leads_lead_pipeline_stage_id_foreign');
            $table->dropForeign('leads_lead_source_id_foreign');
            $table->dropForeign('leads_lead_type_id_foreign');
            $table->dropForeign('leads_person_id_foreign');
            $table->dropForeign('leads_user_id_foreign');
        });
    }
};
