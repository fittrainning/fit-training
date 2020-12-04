<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesociclo extends Model
{
    protected $table = 'tb_mesociclo';

    protected $fillable = [
        'Mes_Id_Gen','Mes_Pla_Id','Mes_Id','Mes_Volumen_Meso','Mes_Intensidad_Meso','Mes_Fecini','Mes_Fecfin','Mes_Nummes','Mes_Minutos_Totales','Mes_Num_Sesxmes'
    ];
}
