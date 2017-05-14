<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Modelo;

use App\User;


class LenteController extends Controller
{
    
    public function index(){
        $modelos=Modelo::all();
        return $modelos;
        /*$users=User::all();
        return $users;*/
        //return view('admin');
    }
}
