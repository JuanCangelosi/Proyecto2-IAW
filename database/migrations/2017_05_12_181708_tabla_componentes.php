<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaComponentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo');
            $table->double('precio_base');
            $table->string('detalle',1000);
            $table->timestamps();
        });
        
        Schema::create('vidrios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->double('precio');
            $table->string('colores',1000);
            $table->timestamps();
        });
        
        Schema::create('marcos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->double('precio');
            $table->string('colores',1000);
            $table->timestamps();
        });
        
        Schema::create('patillas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->double('precio');
            $table->string('colores',1000);
            $table->timestamps();
        });
        
        Schema::create('tamanos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medida');
            $table->string('ancho_puente');
            $table->string('ancho_lente');
            $table->timestamps();
        });
        
       Schema::create('lente_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_usuario');
            $table->string('modelo');
            $table->string('precio_base');
            $table->string('detalle',1000);
            $table->string('vidrio',1000);
            $table->string('marco',1000);
            $table->string('patilla',1000);
            $table->string('tamano',1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('modelos');
        Schema::drop('vidrios');
        Schema::drop('marcos');
        Schema::drop('patillas');
        Schema::drop('tamanos');
        Schema::drop('lente_usuarios');
    }
}
