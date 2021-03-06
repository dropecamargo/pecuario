<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

use Validator, DB;

class Sanidad extends BaseModel
{
	   protected $table = "sanidad";
	   public $timestamps = false;

    protected $fillable = ['sanidad_actividad','sanidad_animal','sanidad_fecha','sanidad_nombre','sanidad_tratamiento','sanidad_comentario','sanidad_lote','sanidad_cambialote'];
    protected $boolean = ['sanidad_aplicalote'];

    

    public function isValid($data){
        $rules = [
            'sanidad_actividad' => '',
            'sanidad_animal' => '',
            'sanidad_fecha' => '|date_format:Y-m-d',
            'sanidad_nombre' => 'required',
            'sanidad_tratamiento' => '',
            'sanidad_comentario' => '',
            'sanidad_lote' => '',
            'sanidad_cambialote' =>''
            
            ];

    $validator = Validator::make($data, $rules);
       if ($validator->passes()) {
           return true;
       }
       $this->errors = $validator->errors();
       return false;
    }

	public static function getSanidades()
    {
        $query = Sanidad::query();
        
        $query->join('animal','sanidad.sanidad_animal','=','animal.id');
        $query->join('lote','sanidad.sanidad_lote','=','lote.id');
        $query->join('actividad', 'sanidad.sanidad_actividad', '=', 'actividad.id');
        $query->select('sanidad.*',
            'animal.animal_numero',
            'lote.lote_nombre',
            'actividad.actividad_nombre');
        return $query->get();
    }

    // Traemos Registro filtrado de Animal

    public static function getSanidad($id)
    {
        $query = Sanidad::query();
        $query->join('lote', 'sanidad.sanidad_lote', '=', 'lote.id');
        $query->join('actividad', 'sanidad.sanidad_actividad', '=', 'actividad.id');
        $query->join('animal','sanidad.sanidad_animal','=','animal.id');
        $query->select('sanidad.*', 
            'lote.lote_nombre',
            'animal.animal_numero',
            'actividad.actividad_nombre');
        $query->where('sanidad.id', $id);
        return $query->first();
    }
   


    


}
