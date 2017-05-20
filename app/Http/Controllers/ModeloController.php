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
        return redirect('/loadprecargado')->with('message', 'Se ha cargado Modelo con exito.');
    }
  
    public function modificarModelo(Request $request){
        $request=$request->all();
        $modelo= Modelo::where('modelo', $request['nombre_modelo'])->get()->first();
        if($request['button']=='update'){
          $this->updateModelo($modelo, $request);
          return redirect('/loadprecargado')->with('message', 'Se ha modificado modelo con exito.');
        }
        else {
          $this->eliminarModelo($modelo, $request);
          return redirect('/loadprecargado')->with('message', 'Se ha eliminado modelo con exito.');  
        }
    }
    
    private function updateModelo($modelo, $request){
        if($request['descripcionModelo']!=null)
            $modelo->detalle = $request['descripcionModelo'];
        if($request['precio_modelo']!=null)
            $modelo->precio_base = $request['precio_modelo'];  
        $modelo->save();
        
    }
      
    private function eliminarModelo($modelo, $request){
        $modelo->delete();
  
    }
}
