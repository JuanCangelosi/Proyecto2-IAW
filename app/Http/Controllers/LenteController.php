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
    
   
}
