<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {

            $table->increments('curriculums_id'); 
            $table->integer('curriculums_users_id')->unsigned(); 
            $table->foreign('curriculums_users_id')->references('users_id')->on('users')->onDelete('cascade'); 

            $table->string('curriculums_field')->nullable(); 
            $table->text('curriculums_about')->nullable();
            $table->text('curriculums_objective')->nullable();
            $table->text('curriculums_hobby')->nullable();

            $table->string('curriculums_link_website')->nullable(); 
            $table->string('curriculums_link_linkedin')->nullable(); 
            $table->string('curriculums_link_github')->nullable();
            $table->string('curriculums_link_dribbble')->nullable();
            $table->string('curriculums_link_behance')->nullable(); 
            $table->string('curriculums_link_twitter')->nullable(); 
            $table->string('curriculums_link_facebook')->nullable();             

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
        Schema::dropIfExists('curriculums');
    }
}
