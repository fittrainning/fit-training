<?php

namespace App\Http\Controllers;

use App\Mensajeria;
use Session;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage; 
use Illuminate\Support\Str; 
use File;

class MensajesController extends Controller
{
    public function index()
    {
    	$bicicletas = Mensajeria::select('Men_id','Men_em_Usu_id','Men_re_Usu_id','Men_Mensaje','Men_Estado')->with('tb_usuarios:Usu_nombre')->get();
 
        //$ib = Bicicletas::find(3)->imagenesbicicletas;
 
        //dd($ib);
 
        // $imagenes = Bicicletas::find(3)->imagenesbicicletas;
 
        return view('mensajeria1', compact('Mensajeria')); 
    }

    public function crear()
    {
        $bicicletas = Mensajeria::all();
        return view('admin.bicicletas.crear', compact('Mensajeria'));
    }
}
