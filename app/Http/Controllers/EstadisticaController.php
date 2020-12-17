<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\deporte;

class EstadisticaController extends Controller
{
    public function index(){
        $lava=new Lavacharts;
        $popularity=$lava->DataTable();
        $date=deporte::select("country as 0"," users as 1")->get()->toArray();

        $popularity->addStringColumn("Country")
        ->addNumberColumn("users")
        ->addRows($date);
        $lava->GeoChart("Popularity",$popularity);

        return view("estadisticas", ["lava"=>$lava]);
    }
}