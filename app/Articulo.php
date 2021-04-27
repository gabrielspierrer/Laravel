<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function escritor()
    {
    	return $this->belongsTo(Escritor::class);
    }

    public function etiquetas()
    {
    	return $this->belongsToMany(Etiqueta::class);
    }
}
