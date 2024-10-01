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
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('description')->nullable();
            $table->json('billing_address')->nullable();
            $table->json('shipping_address')->nullable();
            $table->decimal('discount_percent', 12, 4)->nullable()->default(0);
            $table->decimal('discount_amount', 12, 4)->nullable();
            $table->decimal('tax_amount', 12, 4)->nullable();
            $table->decimal('adjustment_amount', 12, 4)->nullable();
            $table->decimal('sub_total', 12, 4)->nullable();
            $table->decimal('grand_total', 12, 4)->nullable();
            $table->dateTime('expired_at')->nullable();
            $table->unsignedInteger('person_id')->index('quotes_person_id_foreign');
            $table->unsignedInteger('user_id')->index('quotes_user_id_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
