<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lente;

class LentesController extends Controller
{
	public function index() {
		return view('lentes.index');
	}
	public function json() {
		return Lente::all();
	}
}
