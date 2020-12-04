<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    protected $table = 'tb_etapa';

    protected $fillable = [
        'Eta_Id','Eta_nombre','Eta_Fecini','Eta_Fecfin'
    ];
}
