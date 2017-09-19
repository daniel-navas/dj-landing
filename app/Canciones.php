<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canciones extends Model
{
    protected $table = 'canciones';

    public static function Valor($referencia){
    	$valor = Canciones::where('referencia','=',$referencia)->first();
    	return $valor->valor;
    }
}