<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deportistas extends Model
{
    protected $table = 'tb_deportistas';

    protected $fillable = [
        'Dep_Usu_id','Dep_estado','Dep_razon','Dep_Cod_Fic','Dep_cod_Dee','Dep_id_Ana'
    ];
}
