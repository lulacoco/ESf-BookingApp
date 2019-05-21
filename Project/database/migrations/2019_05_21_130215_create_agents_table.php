<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('age');
            $table->string('email');
            $table->integer('bank_account');
            $table->text('password');
            $table->string('city');
            $table->text('src');
            $table->timestamps();
            $table->rememberToken();
        });
    }
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
