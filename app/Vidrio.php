<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vidrio extends Model
{
    public function lente(){ // es lo mismo App\Lente
        return $this->belongsTo(Lente::class);
    }
}
