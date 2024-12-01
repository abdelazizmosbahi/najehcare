<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id(); // this automatically creates an unsignedBigInteger for the primary key
            $table->string('name');
            $table->string('specialization');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}

