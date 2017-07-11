<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paterno');
            $table->string('materno');
            $table->string('nombres');
            $table->integer('edad');
            $table->string('dni')->unique();
            $table->string('email');
            $table->string('colegio');
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
        Schema::dropIfExists('inscripcion');
    }
}
