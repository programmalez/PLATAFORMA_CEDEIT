<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoimpactoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoimpacto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('tipo_documento');
            $table->unsignedBigInteger('numero_documento'); 
            $table->string('direccion');
            $table->unsignedBigInteger('celular');
            $table->string('correo');
            $table->string('programa');
            $table->string('como_se_entero');
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
        Schema::dropIfExists('infoimpacto');
    }
}
