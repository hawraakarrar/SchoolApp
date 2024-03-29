<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lacture_id')->unsigned();
            $table->unsignedBigInteger('grade_date_id')->unsigned();
            $table->unsignedBigInteger('stu_id')->unsigned();
            $table->foreign('lacture_id')->references('id')->on('lacture');
            $table->foreign('grade_date_id')->references('id')->on('grade_date');
            $table->foreign('stu_id')->references('id')->on('student');
            $table->Integer('grade');
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
        Schema::dropIfExists('grade');
    }
}
