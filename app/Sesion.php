<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $table = 'tb_sesion';

    protected $fillable = [
        'Ses_id','title','Ses_Mic_Id_Gen','Ses_lugar','color','textColor','start','end','Ses_volumen','Ses_intensidad','Ses_calificacion','Ses_capacidad','Ses_tipo_preparacion'
    ];
}
