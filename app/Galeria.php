<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
     protected $table = 'galeria';


    public static function Valor($referencia){
    	$valor = Galeria::where('referencia','=',$referencia)->first();
    	return $valor->valor;
    }
}
