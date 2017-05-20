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
            $table->string('detalle');
            $table->timestamps();
        });
        
        Schema::create('vidrios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->double('precio');
            $table->string('colores');
            $table->timestamps();
        });
        
        Schema::create('marcos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->double('precio');
            $table->string('colores');
            $table->timestamps();
        });
        
        Schema::create('patillas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->double('precio');
            $table->string('colores');
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
            $table->string('detalle');
            $table->string('vidrio');
            $table->string('marco');
            $table->string('patilla');
            $table->string('tamano');
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
