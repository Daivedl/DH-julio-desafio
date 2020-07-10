<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peliculas;
class InicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio()
    {
        $peliculas = Peliculas::all()->random(5);
        $peliculasUltimas = Peliculas::all()->take(-5);
        $vac=compact('peliculas','peliculasUltimas');
        return view("layout", $vac);
    }

    /*public function search($search){
        $search = urldecode($search);
        $peliculas = Peliculas::where('title', 'LIKE', '%'.$search.'%')->get();

        if (count($peliculas) == 0){
            return view('layout');
        } else{
            return view('/titulos/busquedaTitulos',$search,$peliculas);

        }
    }
    */
    public function buscador(Request $request){
        $peliculas    =   Peliculas::where('title','LIKE','%'.$request->texto."%")->get();
        return view("busquedaTitulos",compact("peliculas"));
    }

}
