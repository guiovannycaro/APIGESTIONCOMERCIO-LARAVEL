<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleenvioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleenvio', function (Blueprint $table) {
            $table->id();
             $table->integer('ENVD_PROD_ID');
            $table->integer('ENVD_CANTIDAD');
            $table->double('ENVD_PRECIO');
            $table->double('ENVD_SUBTOTAL');
            $table->double('ENVD_IVA');
            $table->double('ENVD_TOTAL');
            $table->double('ENVD_DESCUENTO');
            $table->string('ENVD_ENV_ID');
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
        Schema::dropIfExists('detalleenvio');
    }
}
