<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;

class ModeloController extends Controller
{
       
    public function cargarModelo(Request $request){
        $request=$request->all();
        // lo tratamos como arreglo, se maneja con los nombres definidos en los formularios. Te podes fijar haciendo return $request->all();, que nombre de clavele pone el arreglo.
        $modelo = new Modelo;
        $modelo->modelo = $request['nombre_modelo'];
        $modelo->detalle = $request['descripcionModelo'];
        $modelo->precio_base = $request['precio_modelo'];
        
        $modelo->save();
        return redirect('home');
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
