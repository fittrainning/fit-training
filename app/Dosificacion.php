<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosificacion extends Model
{
    protected $table = 'tb_dosificacion';

    protected $fillable = [
        'Dos_Id','Dos_Dosificacion','Dos_Mes_Id_Gen','Dos_porcentaje','Dos_minutos'
    ];
}
