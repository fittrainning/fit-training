<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'tb_director';

    protected $fillable = [
        'Dir_Usu_id','Dir_Especialidad'
    ];
}
