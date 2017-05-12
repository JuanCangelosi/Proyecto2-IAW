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
            $table->string('color');
            $table->timestamps();
        });
        
        Schema::create('marcos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->double('precio');
            $table->string('color');
            $table->timestamps();
        });
        
        Schema::create('patillas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->double('precio');
            $table->string('color');
            $table->timestamps();
        });
        
        Schema::create('precargados', function (Blueprint $table) {
            $table->unsignedInteger('id_modelo');
            $table->unsignedInteger('id_vidrio');
            $table->unsignedInteger('id_marco');
            $table->unsignedInteger('id_patilla');
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
        Schema::drop('precargados');
    }
}
