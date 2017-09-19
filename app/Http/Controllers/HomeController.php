<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Canciones;
use App\Servicios;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $canciones = Canciones::all();
        $servicios = Servicios::all();

        return view('index')->with('canciones', $canciones)->with('servicios', $servicios);
    }
}