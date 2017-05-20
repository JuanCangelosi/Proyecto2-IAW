<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marco;
use Illuminate\Support\Facades\Auth;
class MarcoController extends Controller
{
     
    public function cargarMarco(Request $request){
        $marco = new Marco;
        $marco->tipo = $request->TipoMarco;
        $marco->precio='50';
        $marco->colores = serialize(array('000000'));
        $marco->save();
        return redirect('/loadprecargado')->with('message', 'Se ha cargado Marco con exito.');
    }
    
    public function modificarMarco(Request $request){
        if(Auth::check() && Auth::user()->isAdmin()){
            $request = $request->all();
            if($request['nombre_modeloModif']!=null){
                $marco= Marco::where('tipo', $request['nombre_tipo'])->get()->first();
                if($request['button']=='update'){  
                    $this->updateMarco($marco, $request);
                    return redirect('/loadprecargado')->with('message', 'Se ha editado marco especificado con exito.');
                }else{//el boton fueelminar     
                    $this->eliminarMarco($marco);
                    return redirect('/loadprecargado')->with('message', 'Se ha eliminado el tipo de marco especificado con exito.');
                }
            }else
                return redirect('/loadprecargado')->with('message', 'Tiene que especificar tipo para realizar operacion sobre marcos.');
        }
    }
    
    private function eliminarMarco($marco){
        $marco->delete();
    }
        
    private function updateMarco($marco, $request){
        if($request['nombre_modeloModif']!=null)
            $marco->tipo=$request['nombre_modeloModif'];
        if($request['ColorMarco']!='Nada seleccionado' || $request['ColorMarco']!=null){
            $colores= explode(",",$request['ColorMarco']);
            $marco->colores =serialize($colores);
        }
        $marco->save();
    }
    
    
    public function getColores(Request $request){
        $request = $request->all();
        $marco=Marco::where('tipo', $request['nombre_tipo'])->get()->first();           
        return unserialize($marco->colores);
    }

    public function getMarcos(){
        if(request()->ajax())
            if(Auth::check() && Auth::user()->isAdmin())
                return Marco::all();
    }
}
