<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vidrio;
use Illuminate\Support\Facades\Auth;

class VidrioController extends Controller
{
    public function cargarVidrio(Request $request){
        if(Auth::check() && Auth::user()->isAdmin()){
            $request = $request->all();
            $vidrio = new Vidrio;
            $vidrio->tipo = $request['TipoVidrio'];
            $vidrio->precio='50';
            $vidrio->colores = serialize(array('000000'));
            $vidrio->save();   
            return redirect('/loadprecargado')->with('message', 'Se ha cargado Vidrio con exito.');
        }else
            return redirect('/loadprecargado')->with('Errormessage', 'Se necesita permisos de administrador para realizar esta accion.'); 
    }

    
     public function modificarVidrio(Request $request){
        if(Auth::check() && Auth::user()->isAdmin()){
            $request = $request->all();
            if(array_key_exists('nombre_tipo', $request)){
                $vidrio= Vidrio::where('tipo', $request['nombre_tipo'])->get()->first();
                if($request['button']=='update'){  
                    $this->updateVidrio($vidrio, $request);
                    return redirect('/loadprecargado')->with('message', 'Se ha editado lente especificado con exito.');
                }else{//el boton fueelminar     
                    $this->eliminarVidrio($vidrio);
                    return redirect('/loadprecargado')->with('message', 'Se ha eliminado el tipo de lente especificado con exito.');
                }
            }else
                return redirect('/loadprecargado')->with('Errormessage', 'Tiene que especificar tipo para realizar operacion sobre vidrios.');
        }else
            return redirect('/loadprecargado')->with('Errormessage', 'Se necesita permisos de administrador para realizar esta accion.'); 
    }
    
    private function eliminarVidrio($vidrio){
        $vidrio->delete();
    }
        
    private function updateVidrio($vidrio, $request){
        if($request['nombre_modeloModif']!=null)
            $vidrio->tipo=$request['nombre_modeloModif'];
        if($request['ColorVidrio']!='Nada seleccionado' && $request['ColorVidrio']!=null){
            $colores= explode(",",$request['ColorVidrio']);
            $vidrio->colores =serialize($colores);
        }
        $vidrio->save();
    }
    
    
    public function getColores(Request $request){
        $request = $request->all();
        $vidrio=Vidrio::where('tipo', $request['nombre_tipo'])->get()->first();           
        return unserialize($vidrio->colores);
    }
    
    public function getVidrios(){
        if(request()->ajax())
            if(Auth::check() && Auth::user()->isAdmin())
                return Vidrio::all();
    }
}
