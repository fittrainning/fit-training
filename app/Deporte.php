<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deporte extends Model
{
    protected $table = 'tb_deporte';

    protected $fillable = [
        'Dee_cod','Dee_nombre','Dee_detalle'
    ];
}
