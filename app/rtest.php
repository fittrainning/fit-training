<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rtest extends Model
{
    protected $table = 'tb_resmensual';
    protected $fillable = [
        'Rem_id', 'Rem_Tes_id', 'Rem_Usu_id', 'Rem_fecha', 'Rem_resultado', 
    ];
}
