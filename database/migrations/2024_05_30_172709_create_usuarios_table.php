<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('USU_NOMBRES');
            $table->string('USU_DIRECCION');
            $table->string('USU_TELEFONO');
            $table->string('USU_CORREO');
            $table->string('USU_NUMDOCUMENTO');
            $table->string('USU_PASSWORD');
            $table->integer('USU_TDOC_ID');
            $table->integer('USU_ROL_ID');
            $table->integer('USU_ESTADO');
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
        Schema::dropIfExists('usuarios');
    }
}