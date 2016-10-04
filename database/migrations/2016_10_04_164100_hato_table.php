<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hato', function (Blueprint $table) {
            $table->increments('hato_id');
            $table->string('hato_nombre', 10);
            $table->text('hato_descripcion');
            $table->string('color',10);
            $table->boolean('hato_activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Hato');
    }
}
