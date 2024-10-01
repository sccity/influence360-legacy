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
        Schema::table('initiative_quotes', function (Blueprint $table) {
            $table->foreign(['initiative_id'])->references(['id'])->on('initiatives')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['quote_id'])->references(['id'])->on('quotes')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('initiative_quotes', function (Blueprint $table) {
            $table->dropForeign('initiative_quotes_initiative_id_foreign');
            $table->dropForeign('initiative_quotes_quote_id_foreign');
        });
    }
};
