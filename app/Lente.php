<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lente extends Model
{
    //
    
    public function modelo(){
         return $this->hasOne('App\Modelo');
    }
    
    public function marco(){
        return $this->hasOne('App\Marco');
    }
    
    public function patilla(){
        return $this->hasOne('App\Patilla');
    }
    
    public function vidrio(){
        return $this->hasOne('App\Vidrio');
    }
}
