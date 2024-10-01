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
        Schema::table('warehouse_activities', function (Blueprint $table) {
            $table->foreign(['activity_id'])->references(['id'])->on('activities')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['warehouse_id'])->references(['id'])->on('warehouses')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('warehouse_activities', function (Blueprint $table) {
            $table->dropForeign('warehouse_activities_activity_id_foreign');
            $table->dropForeign('warehouse_activities_warehouse_id_foreign');
        });
    }
};
