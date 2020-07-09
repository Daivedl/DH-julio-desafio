<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peliculas;

class PeliculasController extends Controller
{
    public function mostrarPeliculas5(){
        $peliculas = Peliculas::all()->random(5);
        $vac=compact("peliculas");
        return view("layout");
    }
    public function detallePelicula(){

        return view("detallePelicula");
    }
}
