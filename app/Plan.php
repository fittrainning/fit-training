<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'tb_planentrenamiento';

    protected $fillable = [
        'Pla_id','Pla_fecini','Pla_fecfin','Pla_deporte','Pla_id_Ent','Pla_id_Dep'
    ];
}
