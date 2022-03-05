<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferredClassTuitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferred_class_tuitors', function (Blueprint $table) {
            $table->unsignedBigInteger('id');   
            $table->unsignedBigInteger('user_id');    
            $table->integer("preferred_subject_id");   
            $table->timestamps();  
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferred_class_tuitors');
    }
}
