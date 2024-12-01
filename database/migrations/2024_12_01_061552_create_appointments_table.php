<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
   public function up()
{
    Schema::create('appointments', function (Blueprint $table) {
        $table->id(); // auto-incrementing primary key
        $table->unsignedBigInteger('patient_id'); // foreign key to patients table
        $table->unsignedBigInteger('doctor_id'); // foreign key to doctors table
        $table->dateTime('appointment_time');
        $table->string('type');
        $table->timestamps();

        // Foreign key constraints
        $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
    });
}

    
    

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}

