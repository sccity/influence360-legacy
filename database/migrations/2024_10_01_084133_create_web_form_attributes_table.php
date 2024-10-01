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
        Schema::create('web_form_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('placeholder')->nullable();
            $table->boolean('is_required')->default(false);
            $table->boolean('is_hidden')->default(false);
            $table->integer('sort_order')->nullable();
            $table->unsignedInteger('attribute_id')->index('web_form_attributes_attribute_id_foreign');
            $table->unsignedInteger('web_form_id')->index('web_form_attributes_web_form_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_form_attributes');
    }
};
