<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

use Validator, DB;

class Peso extends BaseModel
{
	   protected $table = "peso";
	   public $timestamps = false;

    protected $fillable = ['peso_animal','peso_fecha','peso_observaciones','peso_lote'];

    

    public function isValid($data){
        $rules = [
            
            'peso_fecha' => '',
            'peso_observaciones' => '',
            'peso_lote' => ''
            
            
            ];

    $validator = Validator::make($data, $rules);
       if ($validator->passes()) {
           return true;
       }
       $this->errors = $validator->errors();
       return false;
    }

	public static function getPesos()
    {
        $query = Peso::query();
        $query->join('lote','peso.peso_lote','=','lote.id');
        $query->join('animal','peso.peso_animal','=','animal.id');
        $query->select('peso.*','animal.animal_nombre','lote.lote_nombre');
        return $query->get();
    }
    // Traemos Registro filtrado de Animal

   public static function getPeso($id)
    {
        $query = Peso::query();
        $query->join('lote','peso.peso_lote','=','lote.id');

        $query->join('animal','peso.peso_animal','=','animal.id');
        $query->select('peso.*','animal.animal_nombre','lote.lote_nombre');
        
        $query->where('peso.id', $id);
        return $query->first();
    }
    



    


}
