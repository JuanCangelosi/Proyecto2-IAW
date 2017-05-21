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
        Schema::dropIfExists('lentes');
    }
}
