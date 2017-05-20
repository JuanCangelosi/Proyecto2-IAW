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
    /*
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
    */
    public function getPatillas(){
        if(request()->ajax())
            if(Auth::check() && Auth::user()->isAdmin())
                return Patilla::all();
    }
}
