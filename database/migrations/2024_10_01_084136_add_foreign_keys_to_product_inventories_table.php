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
        Schema::table('product_inventories', function (Blueprint $table) {
            $table->foreign(['product_id'])->references(['id'])->on('products')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['warehouse_id'])->references(['id'])->on('warehouses')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['warehouse_location_id'])->references(['id'])->on('warehouse_locations')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_inventories', function (Blueprint $table) {
            $table->dropForeign('product_inventories_product_id_foreign');
            $table->dropForeign('product_inventories_warehouse_id_foreign');
            $table->dropForeign('product_inventories_warehouse_location_id_foreign');
        });
    }
};
