<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('animal_id');
            $table->string('animal_numero', 10);
            $table->string('animal_nombre');
            $table->integer('animal_especie')->unsigned();
            $table->integer('animal_raza')->unsigned();
            $table->string('animal_pedigree',5);
            $table->boolean('animal_macho');
            $table->date('animal_nacimiento');
            $table->float('animal_peso_nacido');
            $table->integer('animal_padre');
            $table->integer('animal_madre');
            $table->float('animal_indice_corporal');
            $table->integer('animal_lote')->unsigned();
            $table->text('animal_observaciones');
            $table->string('animal_rdfi',25);
            $table->boolean('animal_activo');
            $table->text('animal_foto');

            $table->foreign('animal_especie')->references('id')->on('especie');
            $table->foreign('animal_raza')->references('id')->on('raza');
            $table->foreign('animal_lote')->references('id')->on('lote');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('animal');
    }
}
