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
        Schema::table('emails', function (Blueprint $table) {
            $table->foreign(['initiative_id'])->references(['id'])->on('initiatives')->onUpdate('no action')->onDelete('set null');
            $table->foreign(['parent_id'])->references(['id'])->on('emails')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['person_id'])->references(['id'])->on('persons')->onUpdate('no action')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emails', function (Blueprint $table) {
            $table->dropForeign('emails_initiative_id_foreign');
            $table->dropForeign('emails_parent_id_foreign');
            $table->dropForeign('emails_person_id_foreign');
        });
    }
};
