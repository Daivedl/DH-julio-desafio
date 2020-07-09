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
    public function search($search){
        $search = urldecode($search);
        $peliculas = Peliculas::select()
                ->where('title', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->get();

        if (count($peliculas) == 0){
            return View('layout')
            ->with('message', 'No hay resultados que mostrar')
            ->with('search', $search);
        } else{
            return View('/titulos/busquedaTitulos')
            ->with('peliculas',$peliculas)
            ->with('search',$search);
        }
    }
}
