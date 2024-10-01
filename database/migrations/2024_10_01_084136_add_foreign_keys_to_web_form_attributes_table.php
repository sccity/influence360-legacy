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
        Schema::table('web_form_attributes', function (Blueprint $table) {
            $table->foreign(['attribute_id'])->references(['id'])->on('attributes')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['web_form_id'])->references(['id'])->on('web_forms')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('web_form_attributes', function (Blueprint $table) {
            $table->dropForeign('web_form_attributes_attribute_id_foreign');
            $table->dropForeign('web_form_attributes_web_form_id_foreign');
        });
    }
};
