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
        Schema::create('bill_files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('billid', 20)->unique();
            $table->integer('year')->index();
            $table->string('session', 30);
            $table->string('billname', 255);
            $table->string('sponsor', 255);
            $table->string('status', 255)->default('In Process');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_files');
    }
};
