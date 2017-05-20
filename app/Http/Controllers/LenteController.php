<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lente;
use App\Vidrio;
use App\Patilla;
use App\Modelo;
use App\Marco;
use App\Tamano;


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
        $lente = new Lente;
        $lente->modelo = $request->modelo;
        $lente->detalle = $request->detalle;
        $lente->precio_base = $request->precio_base;
        $lente->vidrio = serialize($request->vidrio);
        $lente->marco = serialize($request->marco);
        $lente->patilla = serialize($request->patillas);
        $lente->tamano = serialize($request->tamano);
        $lente->save();
    }
    
    public function obtenerPrecargado(Request $request){
        $lente = Lente::find($request->id);
        $lente->vidrio = unserialize($lente->vidrio);
        $lente->marco = unserialize($lente->marco);
        $lente->patilla = unserialize($lente->patilla);
        $lente->tamano = unserialize($lente->tamano);
        return $lente;
    }
    
    public function obtenerIDPrecargados(){
        
    }
}
