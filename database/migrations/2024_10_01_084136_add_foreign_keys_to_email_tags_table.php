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
        Schema::table('email_tags', function (Blueprint $table) {
            $table->foreign(['email_id'])->references(['id'])->on('emails')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['tag_id'])->references(['id'])->on('tags')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('email_tags', function (Blueprint $table) {
            $table->dropForeign('email_tags_email_id_foreign');
            $table->dropForeign('email_tags_tag_id_foreign');
        });
    }
};
