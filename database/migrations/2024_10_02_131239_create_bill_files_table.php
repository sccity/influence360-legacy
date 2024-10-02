<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillFilesTable extends Migration
{
    public function up()
    {
        Schema::create('bill_files', function (Blueprint $table) {
            $table->id();
            $table->string('billid', 20);
            $table->integer('year')->index();
            $table->string('session', 30);
            $table->string('billname', 255);
            $table->string('sponsor', 255);
            $table->string('status', 255)->default('In Process');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bill_files');
    }
}
