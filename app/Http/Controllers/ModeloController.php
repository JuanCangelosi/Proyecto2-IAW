<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;

class ModeloController extends Controller
{
       
    public function cargarModelo(){
        return view('home');
       /* $modelo = new Modelo;
        $modelo->modelo = $request->modelo;
        $modelo->detalle = $request->detalle;
        $modelo->precio_base = $request->precio_base;
        $modelo->save();*/
        
    }
    /*
    public function modificarModelo(Request $request){
        $modelo = Modelo::find(request->id);
        $modelo->modelo = $request->modelo;
        $modelo->detalle = $request->detalle;
        $modelo->precio_base = $request->precio_base;
        $modelo->save();
    }
    
    
    public function eliminarModelo(Request $request){
        $modelo = Modelo::find(request->id);
        $modelo->delete();
    }
    
      public function getModelo(){
        
    }*/
}
