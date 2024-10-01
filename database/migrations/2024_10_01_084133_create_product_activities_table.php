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
        Schema::create('product_activities', function (Blueprint $table) {
            $table->unsignedInteger('activity_id')->index('product_activities_activity_id_foreign');
            $table->unsignedInteger('product_id')->index('product_activities_product_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_activities');
    }
};
