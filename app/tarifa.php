<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarifa extends Model
{
	protected $fillable = ['valorTarifa'];


	public function libros()
    {
        return $this->belongsToMany('App\libro','libros_tarifas');
        //Relación de la tabla libros y la tabla tarifas
    }
}
