<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuideProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guide_program', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guide_id')->unsigned();
            $table->unsignedBigInteger('users_id')->unsigned();
            $table->unsignedBigInteger('program_id')->unsigned();
            $table->foreign('guide_id')->references('id')->on('guide');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('program_id')->references('id')->on('program');
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
        Schema::dropIfExists('guide_program');
    }
}
