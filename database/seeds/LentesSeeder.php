<?php

use Illuminate\Database\Seeder;
use App\Modelo;
use App\Vidrio;
use App\Marco;
use App\Patilla;
use App\Lente;
use App\Tamano;

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
        DB::table('tamanos')->delete();
        //DB::table('lentes')->delete();
        
        
        Modelo::create(['modelo' => 'Original_Wayfarer', 'precio_base' => '100', 'detalle' => 'TBD']);
        Modelo::create(['modelo' => 'Aviator', 'precio_base' => '101', 'detalle' => 'TBD']);
        
        Vidrio::create(['tipo' => 'classic', 'precio' => '100', 'colores' => serialize(array('000000','FFFFFF'))]);
        Vidrio::create(['tipo' => 'gradient','precio' => '100', 'colores' => serialize(array('000000','FFFFFF'))]);
		
        Vidrio::create(['tipo' => 'classic', 'precio' => '100', 'colores' => serialize(array('000000','FFFFFF'))]);
        Vidrio::create(['tipo' => 'gradient','precio' => '100', 'colores' => serialize(array('000000','FFFFFF'))]);
        
        Marco::create(['tipo' => 'classic', 'precio' => '100', 'colores' => serialize(array('000000','FFFFFF'))]);
        Marco::create(['tipo' => 'trendy', 'precio' => '200', 'colores' => serialize(array('000000','FFFFFF'))]);
        
        Patilla::create(['tipo' => 'classic', 'precio' => '100', 'colores' => serialize(array('000000','FFFFFF'))]);
        Patilla::create(['tipo' => 'trendy', 'precio' => '100', 'colores' => serialize(array('000000','FFFFFF'))]);
        
        Tamano::create(['medida' => 'pequeno', 'ancho_lente' => '100', 'ancho_puente' => '100']);
        Tamano::create(['medida' => 'grande', 'ancho_lente' => '100', 'ancho_puente' => '100']);
		
		//Lente::create(['lente_id' => '1']);
        //Lente::create(['lente_id' => '2']);
        
    }
}
