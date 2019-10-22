<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
   
   	protected $fillable = [
	        'persona', 'email', 'empresa', 'pais', 'telefono', 'web', 'otros_medios', 'historico'
	];

	public function estadoContacto() {
		return $this->belongsTo('App\EstadoContacto','estado');
	}

	public function tags() {
		return $this->belongsToMany('App\Tag');
	}

	public function urlToOtrosMedios()
    {
        if(substr($this->otros_medios, 0,1) == '@')
        {
            $str = $this->otros_medios;
            $str = str_replace("@", "https://twitter.com/", $str);
           // dd($str);
            return $str;
        }
        else
        {
            return $this->otros_medios;
        }
    }
}
