<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lote', function (Blueprint $table) {
            $table->increments('lote_id');
            $table->string('lote_nombre',10);
            $table->text('lote_descripcion');
            $table->string('lote_superficie',10);
            $table->string('lote_color',10);
            $table->boolean('lote_activo');
            $table->integer('lote_hato')->unsigned();
            $table->integer('lote_alerta_sin_pesaje');
            $table->integer('lote_alerta_peso_inferior');
            $table->integer('lote_alerta_peso_superior');
            $table->foreign('lote_hato')->references('hato_id')->on('hato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Lote');
    }
}
