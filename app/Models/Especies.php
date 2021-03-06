<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

use Validator, DB;

class Especies extends BaseModel
{
	protected $table = "especie";
	public $timestamps = false;

	protected $fillable = ['especie_nombre'];
	protected $boolean = ['especie_activa'];

	public function isValid($data){
		$rules = [
			'especie_nombre' => 'required|min:3|max:15',
			
		];
		
		$validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            return true;
        }
        $this->errors = $validator->errors();
        return false;
	}
	public static function getEspecies()
    {
        $query = Especies::query();
        $collection = $query->lists('especie_nombre','id');
        $collection->prepend('', '');
        return $collection;
    }
}
