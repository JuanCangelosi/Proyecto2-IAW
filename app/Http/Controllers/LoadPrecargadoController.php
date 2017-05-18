<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadPrecargadoController extends Controller
{
     public function index(){
         return view('cargaprecargados');
    }
}
