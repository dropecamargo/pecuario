<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\BaseModel;

use Validator, DB;

class Lote extends BaseModel
{
protected $table = "lote";
public $timestamps = false;

protected $fillable = ['lote_nombre','lote_descripcion','lote_color','lote_superficie','lote_hato','lote_alerta_sin_pesaje','lote_alerta_peso_inferior','lote_alerta_peso_superior','hato_nombre'];
protected $boolean = ['lote_activo'];

public function isValid($data){
$rules = [
'lote_nombre' => 'required|min:3|max:15',
'lote_descripcion' => 'required',
'lote_color' => 'required|min:3|max:15',
'lote_superficie' => 'required|min:3|max:15',
// 'hato_nombre' => 'required|min:3|max:15'
           'lote_alerta_sin_pesaje' => 'required',
'lote_alerta_peso_inferior' => 'required',
'lote_alerta_peso_superior' => 'required'
];

$validator = Validator::make($data, $rules);
       if ($validator->passes()) {
           return true;
       }
       $this->errors = $validator->errors();
       return false;
}
public static function getHato()
   {
       // if (Cache::has('_documents')) {
       //     return Cache::get('_documents');    
       // }

       // return Cache::rememberForever('_documents', function() {
           $query = Documento::query();
           $query->orderby('hato_nombre');
           $collection = $query->lists('hato_nombre');
           
           $collection->prepend('', '');
           return $collection;
       // });
   }
}