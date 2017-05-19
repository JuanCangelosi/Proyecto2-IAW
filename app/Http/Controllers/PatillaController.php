<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
user App\Patilla;

class PatillaController extends Controller
{
    public function cargarPatilla(Request $request){
        $patilla = new Patilla;
        $patilla->tipo = $request->tipo;
        $patilla->color = serialize($request->color);
        $patilla->save();
    }
    
    public function modificarPatilla(Request $request){
        $patilla = Patilla::find(request->id);
        $patilla->tipo = $request->tipo;
        $patilla->color = serialize($request->color);
        $patilla->save();
    }
    
     
    public function eliminarPatilla(Request $request){
        $patilla = Patilla::find(request->id);
        $patilla->delete();
    }
    
     public function getPatilla(){
        
    }
}
