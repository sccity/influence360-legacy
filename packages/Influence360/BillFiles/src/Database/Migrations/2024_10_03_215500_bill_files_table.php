<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_files', function (Blueprint $table) {
            $table->id(); // auto-increment primary key
            $table->string('bill_id')->nullable(); // alphanumeric and nullable
            $table->enum('status', ['In Process', 'Abandoned', 'Progressed']); // specific statuses
            $table->string('sponsor', 150); // sponsor's name with a length of 150
            $table->date('billfile_date'); // date of creation of the bill file
            $table->timestamps(); // created_at and updated_at for timestamps
            $table->string('billfilename', 255); // billfilename with a length of 255
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_files'); // correct the table name here
    }
};
