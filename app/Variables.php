<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variables extends Model
{
    protected $table = 'variables';


    public static function Valor($referencia){
    	$valor = Variables::where('referencia','=',$referencia)->first();
    	return $valor->valor;
    }
}
