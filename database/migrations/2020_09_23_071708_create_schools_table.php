<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('manager_name');
            $table->string('manager_phone');
            $table->string('manager_email')->unique();

            $table->string('school_name')->unique();
            $table->text('school_description');
            $table->date('school_open_year');
            $table->string('school_phone')->unique();
            $table->string('school_website')->nullable()->unique();
            $table->string('school_email')->unique();
            $table->string('school_country');
            $table->string('school_city');
            $table->string('school_track');
            $table->string('school_logo');
            $table->string('school_cover');
            $table->integer('user_id')->onDelete('cascade'); 
            $table->softDeletes(); 
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
        Schema::dropIfExists('schools');
    }
}
