<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\UsersExport;
use App\Imports\UsersImport;

use App\Exports\UseExport;

use App\Ficha;

class UserController extends Controller
{


    public function exportExcel()
    {
    	return Excel::download(new UsersExport, 'Fichas.xlsx');
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);

        return back()->with('message', 'Importación de fichas completada');
    }

    //_________________________________________________________
    public function ExportExcell()
    {
    	return Excel::download(new UseExport, 'Usuario.xlsx');
    }
    //_________________________________________________________
}










