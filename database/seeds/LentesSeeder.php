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
        DB::table('modelos')->delete();
        DB::table('patillas')->delete();
        DB::table('marcos')->delete();
        DB::table('vidrios')->delete();
        DB::table('lentes')->delete();
        
        
        Modelo::create(['lente_id' => '1', 'modelo' => 'Original_Wayfarer', 'precio_base' => '100', 'detalle' => 'TBD']);
        Modelo::create(['lente_id' => '2', 'modelo' => 'Aviator', 'precio_base' => '101', 'detalle' => 'TBD']);
        
        Vidrio::create(['lente_id' => '1', 'tipo' => 'classic', 'precio' => '100', 'color' => '000000']);
        Vidrio::create(['lente_id' => '1', 'tipo' => 'gradient','precio' => '100', 'color' => 'f44336']);
		
        Vidrio::create(['lente_id' => '2', 'tipo' => 'classic', 'precio' => '100', 'color' => '000000']);
        Vidrio::create(['lente_id' => '2', 'tipo' => 'gradient','precio' => '100', 'color' => 'f44336']);
        
        Marco::create(['lente_id' => '1', 'tipo' => 'classic', 'precio' => '100', 'color' => '000000']);
        Marco::create(['lente_id' => '1', 'tipo' => 'trendy', 'precio' => '200', 'color' => 'f44336']);
        Marco::create(['lente_id' => '2', 'tipo' => 'classic', 'precio' => '100', 'color' => '000000']);
        Marco::create(['lente_id' => '2', 'tipo' => 'trendy', 'precio' => '200', 'color' => 'f44336']);
        
        Patilla::create(['lente_id' => '1', 'tipo' => 'classic', 'precio' => '100', 'color' => '000000']);
        Patilla::create(['lente_id' => '1', 'tipo' => 'trendy', 'precio' => '100', 'color' => 'f44336']);
        Patilla::create(['lente_id' => '2', 'tipo' => 'classic', 'precio' => '100', 'color' => '000000']);
         Patilla::create(['lente_id' => '2', 'tipo' => 'trendy', 'precio' => '100', 'color' => 'f44336']);
		
		Lente::create(['lente_id' => '1']);
        Lente::create(['lente_id' => '2']);
        
    }
}
