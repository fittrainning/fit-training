<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamnesis extends Model
{
    protected $table = 'tb_anamnesis';

    protected $fillable = [
        'Ana_id','Ana_Dep_id','Ana_DepPract','Ana_depo','Ana_Logros','Ana_Logrosdeportivos','Ana_HistorialDeportivo','Ana_HistorialMedico','Ana_HabitosAlimenticios'
    ];
}
