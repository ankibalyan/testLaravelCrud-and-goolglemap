<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name')->unique();
            $table->string('academic_name')->default("No Name");
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('opening_time')->nullable();
            $table->string('opening_time_period')->nullable();
            $table->string('closing_time')->nullable();
            $table->string('closing_time_period')->nullable();
            $table->string('description');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('tags')->nullable();
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
        Schema::drop('academics');
    }
}
