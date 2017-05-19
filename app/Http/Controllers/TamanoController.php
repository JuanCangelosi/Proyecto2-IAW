<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamano;

class TamanoController extends Controller
{
    public function cargarTamano(Request $request){
        $tamano = new Tamano;
        $tamano->medida = $request->medida;
        $tamano->ancho_lente = $request->ancho_lente;
        $tamano->ancho_puente = $request->ancho_puente;
        $tamano->save();
    }
    

    public function modificarTamano(Request $request){
        $tamano = Tamano::find(request->id);
        $tamano->medida = $request->medida;
        $tamano->ancho_lente = $request->ancho_lente;
        $tamano->ancho_puente = $request->ancho_puente;
        $tamano->save();
    }
    
    
    public function eliminarTamano(Request $request){
        $tamano = Tamano::find(request->id);
        $tamano->delete();
    }
    
    public function getTamano(){
        
    }
}
