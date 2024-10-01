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
        Schema::create('quote_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku')->nullable();
            $table->string('name')->nullable();
            $table->integer('quantity')->nullable()->default(0);
            $table->decimal('price', 12, 4)->default(0);
            $table->string('coupon_code')->nullable();
            $table->decimal('discount_percent', 12, 4)->nullable()->default(0);
            $table->decimal('discount_amount', 12, 4)->nullable()->default(0);
            $table->decimal('tax_percent', 12, 4)->nullable()->default(0);
            $table->decimal('tax_amount', 12, 4)->nullable()->default(0);
            $table->decimal('total', 12, 4)->default(0);
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('quote_id')->index('quote_items_quote_id_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_items');
    }
};
