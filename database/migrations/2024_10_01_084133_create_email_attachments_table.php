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
        Schema::create('email_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('path');
            $table->integer('size')->nullable();
            $table->string('content_type')->nullable();
            $table->string('content_id')->nullable();
            $table->unsignedInteger('email_id')->index('email_attachments_email_id_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_attachments');
    }
};
