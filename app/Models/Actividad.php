<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

use Validator, DB;

class Actividad extends BaseModel
{
     protected $table = "actvidad";
    public $timestamps = false;

    protected $fillable = ['actividad_nombre'];
    protected $boolean = ['actividad_activa'];

    public function isValid($data){
    	$rules = [
    		'actividad_nombre' => '',
            'actividad_activa' => ''
    	];

    	$validator = Validator::make($data, $rules);
    	if($validator->passes()){
    		return true;
    	}
    	$this->errors = $validator->errors();
        return false;
    }
    public static function getActividad()
    {
        $query = Actividad::query();
        $collection = $query->lists('actividad_nombre','id');
        $collection->prepend('', '');
        return $collection;
    }
}
