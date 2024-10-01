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
        Schema::create('email_tags', function (Blueprint $table) {
            $table->unsignedInteger('tag_id')->index('email_tags_tag_id_foreign');
            $table->unsignedInteger('email_id')->index('email_tags_email_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_tags');
    }
};
