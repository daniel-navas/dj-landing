<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Canciones;

class CancionesController extends Controller
{

public function canciones(){
	$canciones = Canciones::all();
	return view('administrador.canciones')->with('canciones',$canciones);
}

public function agregarCanciones(Request $request){
	$nombre=$request->nombre;
    $enlace=$request->enlace;
	$imagen = $request->file('imagen');

	$cancion = new Canciones();
	$cancion->nombre = $nombre; 
	$cancion->enlace = $enlace; 
	if($imagen)
        {
            $date = date('mdYhis');
            $nombre = $imagen->getClientOriginalExtension();
            \Storage::disk('local')->put($date.'.'.$nombre,  \File::get($imagen));

            $cancion->imagen = "/images/willy/".$date.'.'.$nombre;
        }
	$cancion->save();
	return back();
}

public function editarCanciones(Request $request){

	$nombre=$request->nombre;
    $enlace=$request->enlace;
	$imagen = $request->file('imagen');

	$cancion = Canciones::find($request->cancion_id);
	$cancion->nombre = $nombre; 
	$cancion->enlace = $enlace; 
	if($imagen)
        {
            $date = date('mdYhis');
            $nombre = $imagen->getClientOriginalExtension();
            \Storage::disk('local')->put($date.'.'.$nombre,  \File::get($imagen));

            $cancion->imagen = "/images/willy/".$date.'.'.$nombre;
        }
	$cancion->save();
	return back();	
}

public function eliminarCanciones($id){
	$cancion = Canciones::find($id);
	$cancion->delete();
	Session::flash('message', 'Canción eliminada correctamente!');
	return back();
}
}