<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservacion extends Model
{
    protected $fillable = ['fechaDevoReservación'];


    public function libros()
    {
        return $this->belongsToMany('App\libro','libros_reservaciones');
        //Relación de la tabla libros y la tabla reservaciones
    }
}
