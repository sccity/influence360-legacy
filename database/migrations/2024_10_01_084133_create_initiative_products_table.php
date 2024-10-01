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
        Schema::create('initiative_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity')->default(0);
            $table->decimal('price', 12, 4)->nullable();
            $table->decimal('amount', 12, 4)->nullable();
            $table->unsignedInteger('initiative_id')->index('initiative_products_initiative_id_foreign');
            $table->unsignedInteger('product_id')->index('initiative_products_product_id_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('initiative_products');
    }
};
