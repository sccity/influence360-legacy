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
        Schema::table('activities', function (Blueprint $table) {
            $table->string('parent_type')->nullable()->after('user_id');
            $table->unsignedInteger('parent_id')->nullable()->after('parent_type');
            $table->index(['parent_type', 'parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activities', function (Blueprint $table) {
            $table->dropIndex(['parent_type', 'parent_id']);
            $table->dropColumn(['parent_type', 'parent_id']);
        });
    }
};
