<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
	protected $nullable = [];
	
	protected $boolean = [];

	public static function boot()
	{
		parent::boot();
	    static::saving(function($model) {
			self::setNullables($model);
	    });
	}

	
	protected static function setNullables($model)
	{
		foreach($model->nullable as $field) {
			if(empty($model->{$field}))
			{
				$model->{$field} = null;
			}
		}
	}

	public function fillBoolean(array $attributes)
	{
		foreach ($this->boolean as $value) {
        	$this->setAttribute($value, (isset($attributes[$value]) && $value == trim($attributes[$value])) ? true : false);
        }
	}
}

