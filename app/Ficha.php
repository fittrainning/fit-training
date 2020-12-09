<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table = 'tb_ficha';

    protected $fillable = [
        'Fic_id','Fic_Cod','Fic_Nombre','Fic_Tipo','Fic_Jornada'
    ];
}
