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
    /*
    public function create (Request $request){
        $peliculas = new Pelicula();

        $peliculas -> title = $request->nombre;
        $peliculas -> rating = $request->rating;
        $peliculas -> awards = $request->awards;
        $peliculas -> release_date = $request->release_date;
        $peliculas -> length = $request->length;
        $peliculas -> genre_id = $request->genre_id;

        $$peliculas->save();
        return redirect('/');
    }
    public function read(){
        $peliculas = Pelicula::all();
        return view('abm.index',['peliculas'=>$peliculas]);
    }
    public function edit($id){
        $peliculas = Pelicuka::all();
        $peli = Pelicula::findOrFail($id);
        return view('abm.index',['peliculas'=>$peliculas,'peli'=>$peli]);
    }
    public function update(Request $request, $id){
        $peliculas = Pelicula::findOrFail($id);

        $peliculas -> title = $request->nombre;
        $peliculas -> rating = $request->rating;
        $peliculas -> awards = $request->awards;
        $peliculas -> release_date = $request->release_date;
        $peliculas -> length = $request->length;
        $peliculas -> genre_id = $request->genre_id;

        $peliculas->save();

        return redirect('/');

    }
    public function preguntar($id){
        $peliculas = Pelicula::all();

        $peliculaDelete = Pelicula::findOrFail($id);

        return view('abm.index',['peliculas'=>$peliculas,'peliculaDelete'=>$peliculaDelete]);
    }
    public function delete($id){
        $peliculas=Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect('/');
    }
    */
    public function index(){
        $datos['peliculas']=Peliculas::paginate(5);

        return view('abm.index',$datos);
    }
    public function create(){
        return view('abm.create');
    }
    public function store(Request $request){

        $campos=[
            'title' => 'required|string|max:100',
            'rating' => 'required|string|max:100',
            'awards'=> 'required|string|max:100',
            'release_date'=> 'required|string|max:100',
            'length'=> 'required|int|max:1000',
            'genre_id'=> 'required|int|max:1000'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);


        //$datosPeliculas = request()->all();
        $datosPeliculas = request()->except('_token');
        Peliculas::insert($datosPeliculas);
        return redirect('abm')->with('Mensaje','Película agregada con éxito');
    }
    public function destroy($id) {
        Peliculas::destroy($id);
        return redirect('abm')->with('Mensaje','Película eliminada con éxito');
    }

    public function edit($id){
        $pelicula=Peliculas::findOrFail($id);
        return view('abm.edit',compact('pelicula'));
    }
    public function update (Request $request,$id){

        $campos=[
            'title' => 'required|string|max:100',
            'rating' => 'required|string|max:100',
            'awards'=> 'required|string|max:100',
            'release_date'=> 'required|string|max:100',
            'length'=> 'required|int|max:1000',
            'genre_id'=> 'required|int|max:1000'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);



        $datosPeliculas = request()->except(['_token','_method']);
        Peliculas::where('id','=',$id)->update($datosPeliculas);

        //$pelicula=Peliculas::findOrFail($id);
        //return view('abm.edit',compact('pelicula'));
        return redirect('abm')->with('Mensaje','Película modificada con éxito');
    }
    public function show(Peliculas $peliculas){
        //
    }
    public function listadoAPI(){
        $peliculas = Peliculas::all();

        return json_encode($peliculas);
    }
}
