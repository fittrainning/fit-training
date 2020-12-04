<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodos extends Model
{
    protected $table = 'tb_periodos';

    protected $fillable = [
        'Per_Id','Per_nombre','Per_fecini','Per_fecfin'
    ];
}
