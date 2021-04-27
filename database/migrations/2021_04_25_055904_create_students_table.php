<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('ID');
            $table->string('place');
            $table->string('ПОШТА');
            $table->string('ТЕЛЕФОН');
            $table->string('АУДАН');
            $table->string('МЕКТЕП');
            $table->INTEGER('СЫНЫП');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
