<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
	   protected $table = "animal";
	   public $timestamps = false;

	public static function getAnimales()
    {
        $query = Animal::query();
        $query->join('especie','animal.animal_especie','=','especie.id');
        $query->select('animal.*','especie.especie_nombre');
        return $query->get();
    }
}
