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
    
    public function cargarModelo(Request $request){
        $modelo = new Modelo;
        $modelo->modelo = $request->modelo;
        $modelo->detalle = $request->detalle;
        $modelo->precio_base = $request->precio_base;
        $modelo->save();
        
    }
    
    public function cargarVidrio(Request $request){
        $vidrio = new Vidrio;
        $vidrio->tipo = $request->tipo;
        $vidrio->color = serialize($request->color);
        $vidrio->save();
    }
    
    public function cargarPatilla(Request $request){
        $patilla = new Patilla;
        $patilla->tipo = $request->tipo;
        $patilla->color = serialize($request->color);
        $patilla->save();
    }
    
    public function cargarMarco(Request $request){
        $marco = new Marco;
        $marco->tipo = $request->tipo;
        $marco->color = serialize($request->color);
        $marco->save();
    }
    public function cargarTamano(Request $request){
        $tamano = new Tamano;
        $tamano->medida = $request->medida;
        $tamano->ancho_lente = serialize($request->ancho_lente);
        $tamano->ancho_puente = serialize($request->ancho_puente);
        $tamano->save();
    }
    
    
    public function modificarModelo(){
        
    }
    
    public function modificarVidrio(){
        
    }
    
    public function modificarPatilla(){
        
    }
    
    public function modificarMarco(){
        
    }
    public function modificarTamano(){
        
    }
    
    public function eliminarModelo(){
        
    }
    
    public function eliminarVidrio(){
        
    }
    
    public function eliminarPatilla(){
        
    }
    
    public function eliminarMarco(){
        
    }
    public function eliminarTamano(){
        
    }
}
