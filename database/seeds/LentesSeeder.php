<?php

use Illuminate\Database\Seeder;
use App\Modelo;
use App\Vidrio;
use App\Marco;
use App\Patilla;
use App\Lente;

class LentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('modelos')->delete();
        DB::table('patillas')->delete();
        DB::table('marcos')->delete();
        DB::table('vidrios')->delete();
        */
        
        Modelo::create(['modelo' => 'Original_Wayfarer', 'precio_base' => '100', 'detalle' => 'TBD']);
        Modelo::create(['modelo' => 'Aviator', 'precio_base' => '101', 'detalle' => 'TBD']);
        
        Vidrio::create(['tipo' => 'classic', 'precio' => '100', 'color' => '000000']);
        Vidrio::create(['tipo' => 'classic', 'precio' => '100', 'color' => 'f44336']);
        
        Marco::create(['tipo' => 'classic', 'precio' => '100', 'color' => '000000']);
        Marco::create(['tipo' => 'classic', 'precio' => '100', 'color' => 'f44336']);
        
        Patilla::create(['tipo' => 'classic', 'precio' => '100', 'color' => '000000']);
        Patilla::create(['tipo' => 'classic', 'precio' => '100', 'color' => 'f44336']);
        
        
    }
}
