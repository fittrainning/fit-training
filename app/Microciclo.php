<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Microciclo extends Model
{
    protected $table = 'tb_microciclo';

    protected $fillable = [
        'Mic_Id_Gen','Mic_Mes_Id_Gen','Mic_id','Mic_tipo','Mic_dias','Mic_capacidad','Mic_duracion','Mic_numero_Ses','Mic_volumen_micro','Mic_intensidad_micro'
    ];
}
