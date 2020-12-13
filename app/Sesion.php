<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $table = 'tb_sesion';

    protected $fillable = [
        'Ses_id','Ses_Mic_Id_Gen','Ses_lugar','Ses_color','Ses_textColor','Ses_hora','Ses_horastart','Ses_horaend','Ses_volumen','Ses_intensidad','Ses_calificacion','Ses_capacidad','Ses_tipo_preparacion'
    ];
}
