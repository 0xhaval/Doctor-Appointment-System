<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_labs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('status')->default(false);
            $table->string('days');
            $table->integer('patient_count');
            $table->string('address');
            $table->string('phone')->unique();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_labs');
    }
}
