<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {

            $table->increments('languages_id'); 
            $table->string('languages_name'); 
            $table->integer('languages_level')->unsigned(); 

            $table->integer('languages_curriculums_id')->unsigned(); 
            $table->foreign('languages_curriculums_id')->references('curriculums_id')
            ->on('curriculums')->onDelete('cascade'); 

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
        Schema::dropIfExists('languages');
    }
}
