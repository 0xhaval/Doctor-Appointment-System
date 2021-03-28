<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('phone1')->unique();
            $table->string('phone2')->unique();
            $table->string('specialty');
            $table->string('edu')->nullable();
            $table->text('note')->nullable();
            $table->string('address');
            $table->boolean('status')->default(false);
            $table->integer('patient_count');
            $table->string('days');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->timestamps();
            //, ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday']
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
