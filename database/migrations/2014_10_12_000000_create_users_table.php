<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('gender');
            $table->string('phone_number')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); 
            $table->boolean('is_admin')->default(1);
            $table->boolean('is_tuitor')->nullable();
            $table->string('institution');
            $table->string('subject');
            $table->string('qualification');
            $table->string('s_medium');
            $table->string('ssc_year');
            $table->string('ssc_institution');
            $table->string('ssc_group');
            $table->string('ssc_gpa');
            $table->string('hsc_year');
            $table->string('hsc_institution');
            $table->string('hsc_group');
            $table->string('hsc_gpa');
            $table->string('honours_year');
            $table->string('honours_institution');
            $table->string('honours_subject');
            $table->string('honours_gpa');
            $table->string('about_yourself');
            $table->string('district');
            $table->string('preferred_area');
            $table->string('medium');
            $table->string('preferred_class');
            $table->string('preferred_subject');
            $table->integer('tuitoring_days');
            $table->string('shift');
            $table->integer('salary');
            $table->string('tuitoring_style');
            $table->string('experience');
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
