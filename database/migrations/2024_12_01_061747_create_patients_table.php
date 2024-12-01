<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
{
    Schema::create('patients', function (Blueprint $table) {
        $table->id(); // this automatically creates an unsignedBigInteger for the primary key
        $table->string('name');
        $table->string('email')->unique();
        $table->string('phone');
        $table->timestamps();
    });    
    
}


    public function down()
    {
        Schema::dropIfExists('patients');
    }
}

