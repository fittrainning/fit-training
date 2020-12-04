<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracterizacion extends Model
{
    protected $table = 'tb_caracterizacion';

    protected $fillable = [
        'Car_id','Car_deporte','Car_titulo','Car_descripcion','Car_imagen'
    ];
}
