<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peliculas;
use DB;

class PeliculasController extends Controller
{
    public function mostrarPeliculas5(){
        $peliculas = Peliculas::all()->random(5);
        $vac=compact("peliculas");
        return view("layout");
    }
    public function detallePelicula($id){
        $peliculas = Peliculas::find($id);
        $vac = compact("peliculas");
        return view("detallePelicula",$vac);
    }
    public function todos(){
        $peliculas = Peliculas::paginate(5);
        $vac=compact("peliculas");
        return view("titulos",$vac);
    }
    /*public function search($search){
        $search = urldecode($search);
        $peliculas = Peliculas::where('title', 'LIKE', '%'.$search.'%')->get();

        if (count($peliculas) == 0){
            return view('layout');
        } else{
            return view('/titulos/busquedaTitulos',$search,$peliculas);

        }
    } */
}
