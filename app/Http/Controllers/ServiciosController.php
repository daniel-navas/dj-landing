<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicios;

class ServiciosController extends Controller
{

	public function servicios()
    {
        $servicios = Servicios::all();
		return view('administrador.servicios')->with('servicios',$servicios);
    }

    public function editarServicios(Request $request)
    {
        $tituloServicio=$request->tituloServicio;
        $enlaceServicio=$request->enlaceServicio;
        $imgServicio = $request->file('imgServicio');

        $servicio = Servicios::find($request->servicio);
        $servicio->titulo = $tituloServicio;
        $servicio->enlace = $enlaceServicio;

        if($imgServicio)
        {
            $date = date('mdYhis');
            $nombre = $imgServicio->getClientOriginalExtension();
            \Storage::disk('local')->put($date.'.'.$nombre,  \File::get($imgServicio));

            $servicio->imagen = "/images/willy/".$date.'.'.$nombre;
        }
        $servicio->save();

        return view('administrador.servicios');
    }
}