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

            $table->increments('users_id'); 
            $table->string('users_email', 191)->unique(); 
            $table->string('users_password');
            $table->string('users_username', 191)->unique(); 

            $table->string('users_name')->nullable(); 
            $table->integer('users_age')->unsigned()->nullable(); 
            $table->string('users_gender')->nullable(); 
            $table->string('users_nationality')->nullable();

            $table->string('users_zipcode')->nullable(); 
            $table->string('users_state')->nullable(); 
            $table->string('users_city')->nullable(); 
            $table->string('users_neighborhood')->nullable(); 
            $table->string('users_address')->nullable(); 

            $table->string('users_phone')->nullable(); 
            $table->string('users_cell')->nullable(); 

            $table->string('users_profilepicture')->nullable(); 
            $table->string('users_coverphoto')->nullable(); 
            
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