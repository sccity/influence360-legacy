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
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->json('emails');
            $table->json('contact_numbers')->nullable();
            $table->unsignedInteger('organization_id')->nullable()->index('persons_organization_id_foreign');
            $table->timestamps();
            $table->string('job_title')->nullable();
            $table->unsignedInteger('user_id')->nullable()->index('persons_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};
