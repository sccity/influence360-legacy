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
        Schema::create('product_inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('in_stock')->default(0);
            $table->integer('allocated')->default(0);
            $table->unsignedInteger('product_id')->index('product_inventories_product_id_foreign');
            $table->unsignedInteger('warehouse_id')->nullable()->index('product_inventories_warehouse_id_foreign');
            $table->unsignedInteger('warehouse_location_id')->nullable()->index('product_inventories_warehouse_location_id_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_inventories');
    }
};
