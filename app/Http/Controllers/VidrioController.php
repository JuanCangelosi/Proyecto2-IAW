<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vidrio;

class VidrioController extends Controller
{
    public function cargarVidrio(Request $request){
        $request = $request->all();
        $vidrio = new Vidrio;
        $vidrio->tipo = $request['TipoVidrio'];
        $vidrio->precio='50';
        $vidrio->colores = serialize(array('000000'));
        $vidrio->save();   
        return redirect('/loadprecargado')->with('message', 'Se ha cargado Vidrio con exito.');
    }

    
     public function modificarVidrio(Request $request){
        $request = $request->all();
        $vidrio= Vidrio::where('tipo', $request['nombre_modelo'])->get()->first();
        if($request['button']=='addColor'){
            
            return redirect('/loadprecargado')->with('message', 'Se ha agregado color al lente especificado con exito.');
        }else{
            if($request['button']=='addColor'){
                
                 return redirect('/loadprecargado')->with('message', 'Se ha eliminado color al lente especificado con exito.');
            }else{  //==eliminarColor
                
                 return redirect('/loadprecargado')->with('message', 'Se ha eliminado el lente especificado con exito.');
            }
        }
  /*      $vidrio = Vidrio::find(request->id);
        $vidrio->tipo = $request->tipo;
        $vidrio->color = serialize($request->color);
        $vidrio->save();*/
    }
    
     public function eliminarVidrio(Request $request){
        //$vidrio->delete();
    }
    
    
    
   /* public function getVidrio(){
        
    }*/
}
