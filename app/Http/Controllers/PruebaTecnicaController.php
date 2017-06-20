<?php

namespace ShopCeption\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use ShopCeption\Provincia;
use ShopCeption\Ciudad;
use Illuminate\Support\Facades\View;
use ShopCeption\Http\Controllers\Controller;
use Session;
use Redirect;

class PruebaTecnicaController extends Controller
{
  public function index()
  {
  	$provincias = Provincia::all();
  	return view('prueba.index', ['provincias' => $provincias]);
  }
  public function ciudades($provincia)
  {
  	$lat = Provincia::find($provincia)->lat;
  	$long = Provincia::find($provincia)->long;
  	$ciudades = Ciudad::all()->where('provincia_id', $provincia);
  	$start = Ciudad::all()->where('provincia_id', $provincia)->first()->id;
    return response()->json([
      $ciudades->toArray(),
      'start' => $start,
      'lat' => $lat,
      'long' => $long,
    ]);
  }
}
