<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensajeria extends Model
{
    protected $table = 'tb_mensajeria';

    protected $fillable = [
        'Men_id','Men_em_Usu_id','Men_re_Usu_id','Men_Mensaje','Men_Estado'
    ];
}