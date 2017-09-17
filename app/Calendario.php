<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    protected $table= "calendario";

     public static function Valor($referencia){
    	$valor = Calendario::where('referencia','=',$referencia)->first();
    	if (is_null($valor)) {
    		return "";
    	}
    	return $valor->valor;
    }
}
