<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->string('email');
            $table->integer('card_number');
            $table->string('city');
            $table->text('password');
            $table->text('src');
            $table->timestamps();
            $table->rememberToken();
        });
    }
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
