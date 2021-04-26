<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class libro extends Model
{

	protected $fillable = ['nombrelibro', 'autorlibro', 'categorialibro', 'cantidadlibro'];

    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'slug';
	}


	public function reservacions()
    {
        return $this->belongsToMany('App\reservacion','libros_reservacions');
        //Relación de la tabla libros y la tabla reservaciones
    }

    public function tarifas()
    {
        return $this->belongsToMany('App\tarifa','libros_tarifas');
        //Relación de la tabla libros y la tabla reservaciones
    }
}
