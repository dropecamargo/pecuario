<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

use Validator, DB;

class Animal extends BaseModel
{
	   protected $table = "animal";
	   public $timestamps = false;

    protected $fillable = ['animal_numero','animal_nombre','animal_pedigree','animal_padre','animal_madre','animal_indice_corporal','animal_observaciones','animal_rdfi','animal_raza','animal_lote','animal_especie','animal_nacimiento','animal_foto','animal_macho'];
    protected $boolean = ['animal_activo'];

    public function setPathAttribute($path){
        $this->attributes['animal_foto'] = $path->getClienteOriginalName();
        $name = $path->getClienteOriginalName();
        \Storage::disk('local')->put($name, \File::get($path));
    }

    public function isValid($data){
        $rules = [
            'animal_numero' => '',
            'animal_nombre' => 'required',
            'animal_pedigree' => '',
            'animal_padre' => 'required',
            'animal_madre' => 'required',
            'animal_indice_corporal' => 'required',
            'animal_observaciones' => 'required',
            'animal_rdfi' =>'required',
            'animal_nacimiento' => 'required|date_format:Y-m-d',
            'animal_foto' => 'image|mimes:jpeg,bmp,png'
            ];

    $validator = Validator::make($data, $rules);
       if ($validator->passes()) {
           return true;
       }
       $this->errors = $validator->errors();
       return false;
    }

	public static function getAnimales()
    {
        $query = Animal::query();
        $query->join('especie','animal.animal_especie','=','especie.id');
        $query->join('raza','animal.animal_raza','=','raza.id');
        $query->join('lote','animal.animal_lote','=','lote.id');
        $query->select('animal.*','especie.especie_nombre','raza.raza_nombre','lote.lote_nombre');
        return $query->get();
    }

    // Traemos Registro filtrado de Animal

    public static function getAnimal($id)
    {
        $query = Animal::query();
        $query->join('lote', 'animal.animal_lote', '=', 'lote.id');
        $query->join('raza','animal.animal_raza','=','raza.id');
        $query->join('especie','animal.animal_especie','=','especie.id');
        $query->select('animal.*', 'lote_nombre','especie_nombre','raza_nombre');
        $query->where('animal.id', $id);
        return $query->first();
    }

    


}
