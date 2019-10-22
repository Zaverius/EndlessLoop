<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $primaryKey = 'codigo_pais';

	protected $incrementing = false;

    //
    protected $fillable = [
	        'nombre'
	];
}
