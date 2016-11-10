<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

use Validator, DB;

class Hato extends BaseModel
{
	protected $table = "hato";
	public $timestamps = false;

	protected $fillable = ['hato_nombre','hato_descripcion','hato_color'];
	protected $boolean = ['hato_activo'];

	public function isValid($data){
		$rules = [
			'hato_nombre' => 'required|min:3|max:15',
			'hato_descripcion' => ''
		];
		
		$validator = Validator::make($data, $rules);
        if ($validator->passes()) {
            return true;
        }
        $this->errors = $validator->errors();
        return false;
	}

	public static function getHatos()
    {
        $query = Hato::query();
        $collection = $query->lists('hato_nombre','id');
        $collection->prepend('', '');
        return $collection;
    }
}
