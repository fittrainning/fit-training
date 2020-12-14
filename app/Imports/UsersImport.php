<?php

namespace App\Imports;

use App\Ficha;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{

    public function model(array $row)
    {
        return new Ficha([
            'Fic_Cod'     => $row[0], //a
            'Fic_Nombre'    => $row[1], //b
            'Fic_Tipo' => $row[2], //c
            'Fic_Jornada' => $row[3], //d
        ]);
    }
}
