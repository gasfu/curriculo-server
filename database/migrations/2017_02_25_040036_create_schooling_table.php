<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schooling', function (Blueprint $table) {

            $table->increments('schooling_id'); 
            $table->integer('schooling_level')->unsigned(); 
            $table->string('schooling_course'); 
            $table->date('schooling_beginning'); 
            $table->date('schooling_conclusion')->nullable();
            $table->integer('schooling_status')->unsigned(); 


            $table->integer('schooling_curriculums_id')->unsigned(); 
            $table->foreign('schooling_curriculums_id')->references('curriculums_id')
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
        Schema::dropIfExists('schooling');
    }
}