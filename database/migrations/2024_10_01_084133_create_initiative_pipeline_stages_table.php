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
        Schema::create('initiative_pipeline_stages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->integer('probability')->default(0);
            $table->integer('sort_order')->default(0);
            $table->unsignedInteger('initiative_pipeline_id')->index('initiative_pipeline_stages_initiative_pipeline_id_foreign');

            $table->unique(['code', 'initiative_pipeline_id']);
            $table->unique(['name', 'initiative_pipeline_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('initiative_pipeline_stages');
    }
};
