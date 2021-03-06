<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\LenteUsuario;
use App\Lente;
use App\Vidrio;
use App\Patilla;
use App\Modelo;
use App\Marco;
use App\Tamano;
use Illuminate\Support\Facades\Auth;


class LenteController extends Controller
{
    
    public function index(){
        $modelo=Modelo::all();
        $vidrio=Vidrio::all();
        foreach($vidrio as &$v){
         $v->colores = unserialize($v->colores);  
        }
        
        $patillas=Patilla::all();
        foreach($patillas as &$p){
         $p->colores = unserialize($p->colores);  
        }
        
        $marco=Marco::all();
        foreach($marco as &$m){
         $m->colores = unserialize($m->colores);  
        }
        
        $tamano=Tamano::all();
        
        return compact('modelo','vidrio','patillas','marco','tamano');
    }
    
    public function guardarPrecargado(Request $request){
        if (Auth::check() && Auth::user()->isAdmin()){
            $lente = new Lente;
            $lente->modelo = $request->modelo;
            $lente->detalle = $request->detalle;
            $lente->precio_base = $request->precio_base;
            $lente->vidrio = serialize($request->vidrio);
            $lente->marco = serialize($request->marco);
            $lente->patilla = serialize($request->patilla);
            $lente->tamano = serialize($request->tamano);
            $lente->save();
        }
    }
    
    public function obtenerPrecargado(Request $request){
        $lente = Lente::find($request->id);
        $lente->vidrio = unserialize($lente->vidrio);
        $lente->marco = unserialize($lente->marco);
        $lente->patilla = unserialize($lente->patilla);
        $lente->tamano = unserialize($lente->tamano);
        return $lente;
    }
    
    public function getPrecargados(){
         if(request()->ajax())
            return Lente::all();
    }
    
    public function modificarPrecargado(Request $request){
        if (Auth::check() && Auth::user()->isAdmin()){
            $request=$request->all();    
            if(array_key_exists('id_modelo', $request)){
                $lente=Lente::find($request['id_modelo']);
               if($request['button']=='update'){  
                    $this->updateLente($lente, $request);
                    return redirect('/loadprecargado')->with('message', 'Se ha editado lente precargado especificado con exito.');
                }else{//el boton fueelminar     
                    $this->eliminarLente($lente);
                    return redirect('/loadprecargado')->with('message', 'Se ha eliminado lente precargado especificado.');
                }
            }else
                return redirect('/loadprecargado')->with('Errormessage', 'Tiene que especificar tipo para realizar operacion sobre precargado.');
        }else
            return redirect('/loadprecargado')->with('Errormessage', 'Se necesita permisos de administrador para realizar esta accion.'); 
    }
    
    private function eliminarLente($lente){
        $lente->delete();
    }
    
    private function updateLente($lente, $request){
        if($request['nombre_modeloModif']!=null)
            $lente->modelo=$request['nombre_modeloModif'];
        if($request['precio_modelo']!=null)
            $lente->precio_base=$request['precio_modelo'];
        if($request['descripcionModelo']!=null)
            $lente->detalle=$request['descripcionModelo'];
        if($request['caracteristicasVidrio']!=null)
            $lente->vidrio=$request['caracteristicasVidrio'];
        if($request['caracteristicasMarco']!=null)
            $lente->marco=$request['caracteristicasMarco'];
        if($request['caracteristicasPatilla']!=null)
            $lente->patilla=$request['caracteristicasPatilla'];
        if($request['caracteristicasTamano']!=null)
            $lente->tamano=$request['caracteristicasTamano'];
        $lente->save();
        
    }
    
    public function getCaracteristicas(Request $request){
        if(request()->ajax()){
            $request = $request->all();
            if(array_key_exists('modelo', $request)){
                $lente=Lente::find($request['modelo']);
              /*  $lente->vidrio = unserialize($lente->vidrio);
                $lente->marco = unserialize($lente->marco);
                $lente->patilla = unserialize($lente->patilla);
                $lente->tamano = unserialize($lente->tamano);*/
                return $lente;
            }
        }
    }
    
    public function obtenerIDPrecargados(){

    }
    
    public function guardarLente(Request $request){
        if (Auth::check()){
            $lente = new LenteUsuario;
            $lente->id_usuario = Auth::user()->id;
            $lente->modelo = $request->modelo;
            $lente->detalle = $request->detalle;
            $lente->precio_base = $request->precio_base;
            $lente->vidrio = serialize($request->vidrio);
            $lente->marco = serialize($request->marco);
            $lente->patilla = serialize($request->patilla);
            $lente->tamano = serialize($request->tamano);
            $lente->save();
        }
    }
    
    public function getLentesGuardados(){
        if (Auth::check()){
            $id_usuario = Auth::user()->id;
            if(request()->ajax()){
                $retorno= LenteUsuario::where('id_usuario',$id_usuario)->get();
                return $retorno;
            }
        }
    }
    /*
    public function eliminarLenteGuardado(Request $request){
            $request=$request->all();        
            $lente=LenteUsuario::find($request['id_lenteGuardar']);
            $lente->delete();
    }
    */
    
     public function obtenerGuardado(Request $request){
        if (Auth::check()){
            $lente = LenteUsuario::find($request->id);
            $lente->vidrio = unserialize($lente->vidrio);
            $lente->marco = unserialize($lente->marco);
            $lente->patilla = unserialize($lente->patilla);
            $lente->tamano = unserialize($lente->tamano);
            return $lente;
        }
    }
}
