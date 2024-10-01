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
        Schema::create('initiatives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('initiative_value', 12, 4)->nullable();
            $table->boolean('status')->nullable();
            $table->text('lost_reason')->nullable();
            $table->dateTime('closed_at')->nullable();
            $table->unsignedInteger('user_id')->nullable()->index('initiatives_user_id_foreign');
            $table->unsignedInteger('person_id')->index('initiatives_person_id_foreign');
            $table->unsignedInteger('initiative_source_id')->index('initiatives_initiative_source_id_foreign');
            $table->unsignedInteger('initiative_type_id')->index('initiatives_initiative_type_id_foreign');
            $table->unsignedInteger('initiative_pipeline_id')->nullable()->index('initiatives_initiative_pipeline_id_foreign');
            $table->unsignedInteger('initiative_pipeline_stage_id')->nullable()->index('initiatives_initiative_pipeline_stage_id_foreign');
            $table->timestamps();
            $table->date('expected_close_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('initiatives');
    }
};
