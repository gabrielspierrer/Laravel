<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escritor extends Model
{
    public function articulos()
    {
    	return $this->hasMany(Articulo::class);
    }
}
