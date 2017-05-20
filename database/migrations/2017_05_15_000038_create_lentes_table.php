<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lentes', function (Blueprint $table) {
            $table->increments('id');
            
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
        Schema::dropIfExists('lentes');
    }
}
