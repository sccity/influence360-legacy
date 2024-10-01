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
        Schema::table('person_tags', function (Blueprint $table) {
            $table->foreign(['person_id'])->references(['id'])->on('persons')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['tag_id'])->references(['id'])->on('tags')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('person_tags', function (Blueprint $table) {
            $table->dropForeign('person_tags_person_id_foreign');
            $table->dropForeign('person_tags_tag_id_foreign');
        });
    }
};
