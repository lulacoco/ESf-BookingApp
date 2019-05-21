<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccomodationsTable extends Migration
{
    public function up()
    {
        Schema::create('accomodations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('country');
            $table->string('city');
            $table->text('address');
            $table->double('rating');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('accomodations');
    }
}
