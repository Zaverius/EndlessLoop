<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    
	protected $fillable = [
	        'titulo', 'slug', 'contenido', 'imagen', 'autor',
	];

}
