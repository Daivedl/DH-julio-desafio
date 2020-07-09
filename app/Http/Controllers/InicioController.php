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

}
