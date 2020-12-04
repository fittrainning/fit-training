<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'tb_planentrenamiento';

    protected $fillable = [
        'Pla_id','Pla_fecini','Pla_fecfin','Pla_deporte','Pla_codPla','Pla_res_fuerza','Pla_res_resistencia','Pla_res_velocidad','Pla_res_flexibilidad','Pla_id_Ent','Pla_id_Dep'
    ];
}
