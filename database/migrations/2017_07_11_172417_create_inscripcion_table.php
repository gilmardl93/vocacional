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
            $table->string('paterno',50);
            $table->string('materno',50);
            $table->string('nombres',80);
            $table->integer('edad');
            $table->string('dni',8)->unique();
            $table->string('telefono',12);
            $table->string('email',70);
            $table->string('colegio',200);
            $table->boolean('fieecs')->nullable();
            $table->boolean('fiis')->nullable();
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
