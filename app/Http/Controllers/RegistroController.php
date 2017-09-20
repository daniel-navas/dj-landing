<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Canciones;

class CancionesController extends Controller
{
	public function nuevoRegistro(Request $request){
		$msg = "NUEVO REGISTRO ";

		mail("someone@example.com","My subject",$msg);

	}
}