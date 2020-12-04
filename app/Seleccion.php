<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model
{
    protected $table = 'tb_sesion';

    protected $fillable = [
        'Ses_id','Ses_Mic_Id_Gen','Ses_fecha','Ses_lugar','Ses_hora','Ses_volumen','Ses_intensidad','Ses_calificacion','Ses_capacidad','Ses_tipo_preparacion'
    ];
}
