<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamano;
use Illuminate\Support\Facades\Auth;
class TamanoController extends Controller
{
    public function cargarTamano(Request $request){
        $request = $request->all();
        $tamano = new Tamano;
        $tamano->medida = $request['nombre_tamano'];
        $tamano->ancho_lente = $request['AnchoPuente'];
        $tamano->ancho_puente = $request['AnchoLente'];
        $tamano->save();
        return redirect('/loadprecargado')->with('message', 'Se ha cargado Tamaño con exito.');
    }
    

    public function modificarTamano(Request $request){
        $request = $request->all();
        $tamano= Tamano::where('medida', $request['nombre_medida'])->get()->first();
        if($request['button']=='update'){
            $this->updateTamano($tamano, $request);
            return redirect('/loadprecargado')->with('message', 'Se ha modificado tamaño con exito.');
        }else{
            $this->eliminarTamano($tamano, $request);
            return redirect('/loadprecargado')->with('message', 'Se ha eliminado tamaño con exito.');  
        }
    }
    
    
    private function updateTamano($tamano, $request){
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
