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
        Schema::create('country_states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country_code');
            $table->string('code');
            $table->string('name');
            $table->unsignedInteger('country_id')->index('country_states_country_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_states');
    }
};
