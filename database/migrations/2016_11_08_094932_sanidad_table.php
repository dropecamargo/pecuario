<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanidad', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->integer('sanidad_actividad');
            $table->integer('sanidad_animal');
            $table->date('sanidad_fecha');
            $table->string('sanidad_nombre',50);
            $table->text('sanidad_tratamiento');
            $table->text('sanidad_comentario');
            $table->boolean('sanidad_aplicalote');
            $table->integer('sanidad_lote');
            $table->integer('sanidad_cambialote');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sanidad');
    }
}
