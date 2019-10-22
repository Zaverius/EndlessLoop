<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoContacto extends Model
{

	public $timestamps = false;
   
   	protected $fillable = [
	        'estado', 'color'
	];

	public function contactos() {
		return $this->hasMany('App\Contacto', 'id_contactos');
	}
}
