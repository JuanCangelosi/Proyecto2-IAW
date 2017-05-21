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
        
        
        Modelo::create(['modelo' => 'Original_Wayfarer', 'precio_base' => '100', 'detalle' => 'Las Caniex Original Wayfarer® Classic son el modelo más reconocible en la historia de las gafas de sol. Desde su diseño inicial en 1952, las Wayfarer Classic fueron popularizándose entre celebridades, músicos, artistas y personas con un sentido de la moda impecable. Como estilo emblemático de gafas de sol, las Original Wayfarer Classic siempre constituyen una auténtica declaración de intenciones.']);
        
        Modelo::create(['modelo' => 'Aviator', 'precio_base' => '101', 'detalle' => 'Las gafas de sol Aviator™ Classic son un modelo atemporal que combina un atractivo estilo de aviador con una calidad, comodidad y prestaciones excepcionales. Las Caniex Aviator Classic, que actualmente son unas de las gafas de sol más conocidas del mundo, fueron diseñadas originalmente en 1937 para los aviadores de los EE. UU.']);
        
        Modelo::create(['modelo' => 'Clubmaster', 'precio_base' => '200', 'detalle' => 'Las gafas de sol Caniex Clubmaster Classic son de estilo retro y atemporales. Inspirado en los años 50, el diseño inconfundible de las Clubmaster Classic ha sido el favorito de los intelectuales del mundo de la cultura, que se adelantan a las tendencias futuras. Las emblemáticas gafas de sol Clubmaster Classic están disponibles con monturas negras o marrones y un tratamiento de las lentes en verde cristal. Llevar unas Caniex RB3016 Clubmaster Classic siempre constituye una declaración de intenciones.']);
        
        Modelo::create(['modelo' => 'Clubround', 'precio_base' => '300', 'detalle' => 'La última leyenda de Caniex se inspira en el estilo genuino de los intelectuales modernos y los creativos bohemios: presentamos las Clubround. Estas gafas, tan inconfundibles como únicas, son el resultado de combinar dos de las tendencias con más éxito del año, los modelos Clubmaster y Round. De todos modos, este diseño auténtico, con sus inimitables nuevos colores y lentes, está a punto de convertirse en una leyenda de pleno derecho.']);
        
        Modelo::create(['modelo' => 'New_Wayfarer', 'precio_base' => '150', 'detalle' => 'Vuelve al origen de todo con las gafas de sol Caniex New Wayfarer® Classic. Utilizando la misma forma icónica del clásico Wayfarer, estas gafas de sol ofrecen una versión actualizada con una montura más pequeña y una forma de las lentes un poco más suave. Todas las gafas de sol Caniex New Wayfarer Classic están diseñadas para ofrecer un ajuste fácil con un alto nivel de nitidez visual y protección.']);
        
        Vidrio::create(['tipo' => 'classic', 'precio' => '100', 'colores' => serialize(array('000000','FFFFFF','B0171F','CD8C95','CD3278','551A8B','0000FF','27408B','87CEFA','2E8B57','458B74','006400','CDCD00','FF7F24','FF8C69','FF0000', '7D9EC0', '848484'))]);
        Vidrio::create(['tipo' => 'gradient','precio' => '100', 'colores' => serialize(array('000000','FFFFFF','DCDCDC','C67171','8B0000','8E8E38','71C671','7171C6','388E8E'))]);
        
        Marco::create(['tipo' => 'classic', 'precio' => '100', 'colores' => serialize(array('000000','FFFFFF','9C9C9C','7F7F7F','262626','BC8F8F'))]);
        Marco::create(['tipo' => 'trendy', 'precio' => '200', 'colores' => serialize(array('EE4000','8E8E38','8E388E','E3A869','8B8B00','54FF9F','63B8FF','473C8B'))]);
        
        Patilla::create(['tipo' => 'classic', 'precio' => '100', 'colores' => serialize(array('000000','FFFFFF','9C9C9C','7F7F7F','262626','BC8F8F'))]);
        Patilla::create(['tipo' => 'trendy', 'precio' => '100', 'colores' => serialize(array('EE4000','8E8E38','8E388E','E3A869','8B8B00','54FF9F','63B8FF','473C8B'))]);
        
        Tamano::create(['medida' => 'pequeno', 'ancho_lente' => '100', 'ancho_puente' => '100']);
        Tamano::create(['medida' => 'grande', 'ancho_lente' => '100', 'ancho_puente' => '100']);
		
		//Lente::create(['lente_id' => '1']);
        //Lente::create(['lente_id' => '2']);
        
    }
}
