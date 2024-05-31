<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->string('BOD_NOMBRES');
            $table->string('BOD_DIRECCION');
            $table->string('BOD_TELEFONO');
            $table->integer('BOD_ID_TIPO');
            $table->integer('BOD_CIUDAD_ID');
            $table->integer('BOD_ZONA_ID');
            $table->integer('BOD_ESTADO');
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
        Schema::dropIfExists('bodegas');
    }
}
