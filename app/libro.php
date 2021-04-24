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
}
