<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendario;

class CalendarioController extends Controller
{
	public function calendario(){
		return view('administrador.calendario');
	}

	public function editarCalendario(Request $request)
	{
		$fechaCalendario=$request->fechaCalendario;
		$nombreCalendario=$request->nombreCalendario;
		$ubicacionCalendario=$request->ubicacionCalendario;
		$imgCalendario = $request->file('imgCalendario');

		$calendario = Calendario::find($request->calendario);
		$calendario->fecha = $fechaCalendario;
		$calendario->nombre = $nombreCalendario;
		$calendario->ubicacion = $ubicacionCalendario;

		if($imgCalendario)
		{
			$date = date('mdYhis');
			$nombre = $imgCalendario->getClientOriginalExtension();
			\Storage::disk('local')->put($date.'.'.$nombre,  \File::get($imgCalendario));

			$calendario->imagen = "/images/willy/".$date.'.'.$nombre;
		}
		$calendario->save();

		return view('administrador.calendario');
	}	
}