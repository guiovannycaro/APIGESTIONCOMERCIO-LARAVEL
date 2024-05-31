<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleenviotempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleenviotemp', function (Blueprint $table) {
            $table->id();
            $table->integer('ENVDT_PROD_ID');
            $table->integer('ENVDT_CANTIDAD');
            $table->double('ENVDT_PRECIO');
            $table->double('ENVDT_TOTAL');
            $table->string('ENVDT_IDP');
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
        Schema::dropIfExists('detalleenviotemp');
    }
}
