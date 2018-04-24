<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('profession_id'); 
            $table->foreign('profession_id')->references('id')->on('profession');


            $table->string('fname');
            $table->string('lname'); 
            $table->string('password');  
            
            $table->string('email')->unique();
            $table->String('phone')->nullable();
            $table->enum('rol',['member','admin'])->default('member');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
