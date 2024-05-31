<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio', function (Blueprint $table) {
            $table->id();
            $table->integer('ENV_CLIE_ID');
            $table->string('ENV_TELEFONO');
            $table->integer('ENV_BOD_ID');
            $table->timestamp('ENV_FECHA_ENTREGA');
            $table->timestamp('ENV_FECHA_ENVIO');
            $table->integer('ENV_ORIG_CIU_ID');
            $table->integer('ENV_DEST_CIU_ID');
            $table->integer('ENV_ESTADO');
            $table->string('ENV_REFERENCIA');



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
        Schema::dropIfExists('envio');
    }
}
