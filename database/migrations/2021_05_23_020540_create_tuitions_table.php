<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuitions', function (Blueprint $table) {
            $table->id();
            $table->String('gender');
            $table->String('class');
            $table->String('medium');
            $table->String('subject');
            $table->String('preferred_tuition');
            $table->String('tuitoring_time');
            $table->String('tuitoring_days');
            $table->String('no_of_students');
            $table->String('salary');
            $table->String('location');
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
        Schema::dropIfExists('tuitions');
    }
}
