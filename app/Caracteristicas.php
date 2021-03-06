<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristicas extends Model
{
     public function modelo(){
		return $this->hasMany('\App\Modelo');
	}
	
	 public function marco(){
		return $this->hasMany('\App\Marco');
	}

	 public function patilla(){
		return $this->hasMany('\App\Patilla');
	}
	
	 public function vidrio(){
		return $this->hasMany('\App\Vidrio');
	}	
}
