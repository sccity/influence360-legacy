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
        Schema::table('attributes', function (Blueprint $table) {
            \DB::statement("ALTER TABLE `attributes` MODIFY COLUMN `entity_type` ENUM('initiatives', 'products', 'persons', 'organizations', 'bill_files')");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attributes', function (Blueprint $table) {
            \DB::statement("ALTER TABLE `attributes` MODIFY COLUMN `entity_type` ENUM('initiatives', 'products', 'persons', 'organizations')");
        });
    }
};
