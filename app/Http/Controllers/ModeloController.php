<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;

class ModeloController extends Controller
{
       
    public function cargarModelo(Request $request){
      //  dd($request->all());
      /*  $modelo = Modelo::save([
            'modelo' => $request->get('modelo'),
            'precio_base' => $request->get('precio_base'),
            'detalle' => $request->get('detalle'),
        ]);*/
        $modelo = new Modelo;
        $modelo->modelo = $request->get('modelo');
        $modelo->precio_base = $request->get('precio_base');
        $modelo->detalle = $request->get('detalle');

        $modelo->save();
        return redirect('home');
    }
    /*
    public function modificarModelo(Request $request){
        $modelo = Modelo::find(request->id);
        $modelo->modelo = $request->modelo;
        $modelo->detalle = $request->detalle;
        $modelo->precio_base = $request->precio_base;
        $modelo->save();
    }
    
    
    public function eliminarModelo(Request $request){
        $modelo = Modelo::find(request->id);
        $modelo->delete();
    }
    
      public function getModelo(){
        
    }*/
}
