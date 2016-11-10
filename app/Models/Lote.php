<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

use Validator, DB;

class Lote extends BaseModel
{
protected $table = "lote";
public $timestamps = false;

protected $fillable = ['lote_nombre','lote_descripcion','lote_superficie','lote_hato','lote_alerta_sin_pesaje','lote_alerta_peso_inferior','lote_alerta_peso_superior'];
protected $boolean = ['lote_activo'];

public function isValid($data){
$rules = [
'lote_nombre' => 'required|max:40',
'lote_descripcion' => '',

'lote_superficie' => '|min:3|max:15',
'lote_alerta_peso_inferior' => '',
'lote_alerta_peso_superior' => ''
];

$validator = Validator::make($data, $rules);
       if ($validator->passes()) {
           return true;
       }
       $this->errors = $validator->errors();
       return false;
}

 public static function getLote($id)
    {
        $query = Lote::query();
        $query->select('lote.*', 'hato_nombre');
        $query->leftJoin('hato', 'lote.lote_hato', '=', 'hato.id');
        $query->where('lote.id', $id);
        return $query->first();
    }
    public static function getLotes()
    {
        $query = Lote::query();
        $collection = $query->lists('lote_nombre','id');
        $collection->prepend('', '');
        return $collection;
    }
    
}