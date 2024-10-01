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
        Schema::table('initiative_products', function (Blueprint $table) {
            $table->foreign(['initiative_id'])->references(['id'])->on('initiatives')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['product_id'])->references(['id'])->on('products')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('initiative_products', function (Blueprint $table) {
            $table->dropForeign('initiative_products_initiative_id_foreign');
            $table->dropForeign('initiative_products_product_id_foreign');
        });
    }
};
