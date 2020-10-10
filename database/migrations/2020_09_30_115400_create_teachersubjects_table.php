<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachersubjects', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id')->onDelete('cascade');
            $table->integer('grade_id')->onDelete('cascade')->nullable();
             $table->string('grade_name');
            $table->integer('subject_id')->onDelete('cascade');
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
        Schema::dropIfExists('teachersubjects');
    }
}
