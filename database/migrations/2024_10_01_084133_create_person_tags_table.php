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
        Schema::create('person_tags', function (Blueprint $table) {
            $table->unsignedInteger('tag_id')->index('person_tags_tag_id_foreign');
            $table->unsignedInteger('person_id')->index('person_tags_person_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person_tags');
    }
};
