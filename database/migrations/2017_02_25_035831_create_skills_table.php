<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {

            $table->increments('skills_id');
            $table->string('skills_name'); 

            $table->integer('skills_curriculums_id')->unsigned(); 
            $table->foreign('skills_curriculums_id')->references('curriculums_id')
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
        Schema::dropIfExists('skills');
    }
}