<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

use Validator, DB;

class Razas extends BaseModel
{
    protected $table = "raza";
    public $timestamps = false;

    protected $fillable = ['raza_nombre'];
    protected $boolean = ['raza_activa'];

    public function isValid($data){
    	$rules = [
    		'raza_nombre' => 'required|min:3|max:15',
    	];

    	$validator = Validator::make($data, $rules);
    	if($validator->passes()){
    		return true;
    	}
    	$this->errors = $validator->errors();
        return false;
    }
    public static function getRazas()
    {
        $query = Razas::query();
        $collection = $query->lists('raza_nombre','id');
        $collection->prepend('', '');
        return $collection;
    }
}
