<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolcitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolcities', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->integer('school_id')->onDelete('cascade');
            $table->integer('city_id')->onDelete('cascade');
            $table->text('school-address');
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
        Schema::dropIfExists('schoolcities');
    }
}
