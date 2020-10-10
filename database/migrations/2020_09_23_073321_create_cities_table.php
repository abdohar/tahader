<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->enum('city_name', ['الرياض', 'جدة','مكة','الدمام','الخبر','الجبيل','الاحساء','المدينة المنورة','الطائف','بريده','عنيزة','جيزان','نجران','أبها','الباحة','تبوك','العود']);
            $table->string('city')->nullable();
            $table->integer('school_id')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('cities');
    }
}
