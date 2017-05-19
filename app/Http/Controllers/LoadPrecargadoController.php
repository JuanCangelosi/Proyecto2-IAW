<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoadPrecargadoController extends Controller
{
     public function index(){
         if (Auth::check() && Auth::user()->isAdmin())
            return view('cargaprecargados');
         else
             return view('/welcome');
    }
}