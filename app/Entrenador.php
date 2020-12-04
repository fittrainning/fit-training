<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    protected $table = 'tb_entrenador';

    protected $fillable = [
        'Ent_Usu_id','Ent_ficha','Ent_nivel_de_formacion','Ent_Deporte'
    ];
}
