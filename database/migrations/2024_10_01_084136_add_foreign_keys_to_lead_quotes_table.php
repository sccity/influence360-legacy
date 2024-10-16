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
        Schema::table('lead_quotes', function (Blueprint $table) {
            $table->foreign(['lead_id'])->references(['id'])->on('leads')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['quote_id'])->references(['id'])->on('quotes')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lead_quotes', function (Blueprint $table) {
            $table->dropForeign('lead_quotes_lead_id_foreign');
            $table->dropForeign('lead_quotes_quote_id_foreign');
        });
    }
};