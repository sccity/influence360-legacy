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
        Schema::create('initiative_quotes', function (Blueprint $table) {
            $table->unsignedInteger('quote_id')->index('initiative_quotes_quote_id_foreign');
            $table->unsignedInteger('initiative_id')->index('initiative_quotes_initiative_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('initiative_quotes');
    }
};