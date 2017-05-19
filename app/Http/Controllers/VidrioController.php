<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vidrio;

class VidrioController extends Controller
{
    public function cargarVidrio(Request $request){
        $vidrio = new Vidrio;
        $vidrio->tipo = $request->tipo;
        $vidrio->color = serialize($request->color);
        $vidrio->save();
    }
    
     public function modificarVidrio(Request $request){
        $vidrio = Vidrio::find(request->id);
        $vidrio->tipo = $request->tipo;
        $vidrio->color = serialize($request->color);
        $vidrio->save();
    }
    
     public function eliminarVidrio(Request $request){
        $vidrio = Vidrio::find(request->id);
        $vidrio->delete();
    }
    
    
    
    public function getVidrio(){
        
    }
}
