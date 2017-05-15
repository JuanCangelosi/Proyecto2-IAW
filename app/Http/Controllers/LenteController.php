<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lente;


class LenteController extends Controller
{
    
    public function index(){
        $lentes=Lente::all();
        return view('admin', compact('lentes'));
        /*$users=User::all();
        return $users;*/
        //return view('admin');
    }
}
