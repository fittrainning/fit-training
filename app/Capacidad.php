<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacidad extends Model
{
    protected $table = 'tb_capacidad';

    protected $fillable = [
        'Cap_Id','Cap_Dos_Id','Cap_Capacidad','Cap_Sec_id','Cap_porcenteja','Cap_tiempo','Cap_num_ses'
    ];
}
