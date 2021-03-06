<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;
use Illuminate\Support\Facades\Auth;

class ModeloController extends Controller
{
       
    public function cargarModelo(Request $request){
         if(Auth::check() && Auth::user()->isAdmin()){
            $request=$request->all();
            // lo tratamos como arreglo, se maneja con los nombres definidos en los formularios. Te podes fijar haciendo return $request->all();, que nombre de clavele pone el arreglo.
            $modelo = new Modelo;
            $modelo->modelo = $request['nombre_modelo'];
            $modelo->detalle = $request['descripcionModelo'];
            $modelo->precio_base = $request['precio_modelo'];

            $modelo->save();
            return redirect('/loadprecargado')->with('message', 'Se ha cargado Modelo con exito.');
         }
    }
  
    public function modificarModelo(Request $request){
        if(Auth::check() && Auth::user()->isAdmin()){
            $request = $request->all();
            if(array_key_exists('nombre_modelo', $request)){
                $modelo= Modelo::where('modelo', $request['nombre_modelo'])->get()->first();
                if($request['button']=='update'){
                  $this->updateModelo($modelo, $request);
                  return redirect('/loadprecargado')->with('message', 'Se ha modificado modelo con exito.');
                }else {
                  $this->eliminarModelo($modelo);
                  return redirect('/loadprecargado')->with('message', 'Se ha eliminado modelo con exito.');  
                }
            }
            else return redirect('/loadprecargado')->with('Errormessage', 'Tiene que especificar de modelo para realizar operacion sobre modelo.');
        }
        else
            return redirect('/loadprecargado')->with('Errormessage', 'Se necesita permisos de administrador para realizar esta accion.'); 
    }
    
    private function updateModelo($modelo, $request){
         if(Auth::check() && Auth::user()->isAdmin()){
        if($request['nombre_modeloModif']!=null)
            $modelo->modelo=$request['nombre_modeloModif'];
        if($request['descripcionModelo']!=null)
            $modelo->detalle = $request['descripcionModelo'];
        if($request['precio_modelo']!=null)
            $modelo->precio_base = $request['precio_modelo'];  
        $modelo->save();
         }
        
    }
      
    private function eliminarModelo($modelo){
         if(Auth::check() && Auth::user()->isAdmin()){
            $modelo->delete();
         }
    }
    
    public function getModelos(){
        if(request()->ajax())
            if(Auth::check() && Auth::user()->isAdmin())
                return Modelo::all();
    }
}
