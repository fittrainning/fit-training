<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fentrenador extends Model
{
    protected $table = 'tb_fed';

    protected $fillable = [
        'Fed_cod','Fed_nombre','Fed_tipo','Fed_jornada','Fed_id_Dir','Fed_id_Ent'
    ];
}
