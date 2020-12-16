<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\UsersExport;
use App\Imports\UsersImport;

use App\Exports\UseExport;

use App\Ficha;
use App\User;

class UserController extends Controller
{

    public function exportPdf()
    {
    	$users = Ficha::get();
    	$pdf   = PDF::loadView('director.import_excel', compact('users'));

    	return $pdf->download('Fichas.pdf');
    }

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
    	return Excel::download(new UseExport, 'Usuarios.xlsx');
    }

    public function ExporttPdff()
    {
    	$users = User::get();
    	$pdf   = PDF::loadView('director.cargar_usuario', compact('users'));

    	return $pdf->download('Usuarios.pdf');
    }
    //_________________________________________________________
}










