<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    /*
	*Campos obligatorios
	*
	*@param string value
	*@return string
	*/
	protected $fillable = [
	'content',
	];

	protected $append = [
	'abstract',
	];

    /*
	*Get the content on uppercase
	*
	*@param string value
	*@return string
	*@Permite que el contenido no importando como este lo pase a mayusculas
	*/
	public function getContentAttribute($value)
	{
		return strtoupper($value);
	}

	/*
	*Get the abstract, that is a shorter string of content
	*
	*@param string value
	*@return string
	*/
	public function getAbstractAttribute($value)
	{
		return substr($this->content, 0, 5);
	}

    /*
	*Get the diff for created at
	*
	*@param string value
	*@return string
	*/
	public function getCreatedAtAttribute($value)
	{	
		$value = new Carbon($value);
		$value = Carbon::now()->diffForHumans($value);
		return $value;
	}



}
