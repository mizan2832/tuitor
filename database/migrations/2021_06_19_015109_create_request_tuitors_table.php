<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTuitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_tuitors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('gender');
            $table->string('subject');
            $table->string('phoneNumber');
            $table->string('salary');
            $table->string('tuitoringDays');
            $table->string('tutoringType');
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
        Schema::dropIfExists('request_tuitors');
    }
}
