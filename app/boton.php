<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boton extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tb_test';
    protected $fillable = [
        'Tes_id', 'Tes_nombre', 'Tes_capacidad', 'Tes_objetivo', 'Tes_desarrollo', 'Tes_material','Tes_evaluacion','Tes_imagen','Tes_icono', 
    ];
}
