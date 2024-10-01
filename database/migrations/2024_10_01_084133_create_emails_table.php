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
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject')->nullable();
            $table->string('source');
            $table->string('user_type');
            $table->string('name')->nullable();
            $table->text('reply')->nullable();
            $table->boolean('is_read')->default(false);
            $table->json('folders')->nullable();
            $table->json('from')->nullable();
            $table->json('sender')->nullable();
            $table->json('reply_to')->nullable();
            $table->json('cc')->nullable();
            $table->json('bcc')->nullable();
            $table->string('unique_id')->nullable()->unique();
            $table->string('message_id')->unique();
            $table->json('reference_ids')->nullable();
            $table->unsignedInteger('person_id')->nullable()->index('emails_person_id_foreign');
            $table->unsignedInteger('lead_id')->nullable()->index('emails_lead_id_foreign');
            $table->timestamps();
            $table->unsignedInteger('parent_id')->nullable()->index('emails_parent_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emails');
    }
};
