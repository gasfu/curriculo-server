<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {

            $table->increments('experiences_id'); 
            $table->string('experiences_company'); 
            $table->string('experiences_position'); 
            $table->text('experiences_description'); 
            $table->date('experiences_beginning'); 
            $table->date('experiences_conclusion')->nullable(); 
            $table->integer('experiences_status')->unsigned(); 

            $table->integer('experiences_curriculums_id')->unsigned(); 
            $table->foreign('experiences_curriculums_id')->references('curriculums_id')
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
        Schema::dropIfExists('experiences');
    }
}
