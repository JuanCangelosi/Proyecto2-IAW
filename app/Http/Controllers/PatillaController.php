<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patilla;
use Illuminate\Support\Facades\Auth;
class PatillaController extends Controller
{
    public function cargarPatilla(Request $request){
        $request=$request->all();
        $patilla = new Patilla;
        $patilla->tipo = $request['TipoPatilla'];
        $patilla->precio='50';
        $patilla->colores = serialize(array('000000'));
        $patilla->save();
        return redirect('/loadprecargado')->with('message', 'Se ha cargado Patilla con exito.');
    }
    
     public function modificarPatilla(Request $request){
        if(Auth::check() && Auth::user()->isAdmin()){
            $request = $request->all();
            if($request['nombre_modeloModif']!=null){
                $patilla= Patilla::where('tipo', $request['nombre_tipo'])->get()->first();
                if($request['button']=='update'){  
                    $this->updatePatilla($patilla, $request);
                    return redirect('/loadprecargado')->with('message', 'Se ha editado patilla especificado con exito.');
                }else{//el boton fueelminar     
                    $this->eliminarPatilla($patilla);
                    return redirect('/loadprecargado')->with('message', 'Se ha eliminado el tipo de patilla especificado con exito.');
                }
            }else
                return redirect('/loadprecargado')->with('message', 'Tiene que especificar tipo para realizar operacion sobre patillas.');
        }
    }
    
    private function eliminarPatilla($patilla){
        $patilla->delete();
    }
        
    private function updatePatilla($patilla, $request){
        if($request['nombre_modeloModif']!=null)
            $patilla->tipo=$request['nombre_modeloModif'];
        if($request['ColorPatilla']!='Nada seleccionado' || $request['ColorPatilla']!=null){
            $colores= explode(",",$request['ColorPatilla']);
            $patilla->colores =serialize($colores);
        }
        $patilla->save();
    }
    
    
    public function getColores(Request $request){
        $request = $request->all();
        $patilla=Patilla::where('tipo', $request['nombre_tipo'])->get()->first();           
        return unserialize($patilla->colores);
    }
  
    public function getPatillas(){
        if(request()->ajax())
            if(Auth::check() && Auth::user()->isAdmin())
                return Patilla::all();
    }
}
