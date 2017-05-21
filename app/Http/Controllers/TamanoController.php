<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamano;
use Illuminate\Support\Facades\Auth;
class TamanoController extends Controller
{
    public function cargarTamano(Request $request){
        if(Auth::check() && Auth::user()->isAdmin()){
            $request = $request->all();
            $tamano = new Tamano;
            $tamano->medida = $request['nombre_tamano'];
            $tamano->ancho_lente = $request['AnchoPuente'];
            $tamano->ancho_puente = $request['AnchoLente'];
            $tamano->save();
            return redirect('/loadprecargado')->with('message', 'Se ha cargado Tamaño con exito.');
        }else
            return redirect('/loadprecargado')->with('Errormessage', 'Se necesita permisos de administrador para realizar esta accion.'); 
    }
    

    public function modificarTamano(Request $request){
        if(Auth::check() && Auth::user()->isAdmin()){
            $request = $request->all();
            if(array_key_exists('nombre_medida', $request)){
                $tamano= Tamano::where('medida', $request['nombre_medida'])->get()->first();
                if($request['button']=='update'){
                    $this->updateTamano($tamano, $request);
                    return redirect('/loadprecargado')->with('message', 'Se ha modificado tamaño con exito.');
                }else{
                    $this->eliminarTamano($tamano, $request);
                    return redirect('/loadprecargado')->with('message', 'Se ha eliminado tamaño con exito.');  
                }
            }else
                 return redirect('/loadprecargado')->with('Errormessage', 'Tiene que especificar tipo para realizar operacion sobre tamaños.');
        }else
             return redirect('/loadprecargado')->with('Errormessage', 'Se necesita permisos de administrador para realizar esta accion.'); 
    }
    
    
    private function updateTamano($tamano, $request){
        if($request['nombre_medidaModif']!=null)
            $tamano->medida=$request['nombre_medidaModif'];
        if($request['AnchoPuente']!=null)
            $tamano->ancho_puente = $request['AnchoPuente'];
        if($request['AnchoLente']!=null)
            $tamano->ancho_lente = $request['AnchoLente'];  
        $tamano->save();
    }

    public function eliminarTamano($tamano){
        $tamano->delete();
    }
    
    public function getTamanos(){
        if(request()->ajax())
            if(Auth::check() && Auth::user()->isAdmin())
                return Tamano::all();
    }
}
