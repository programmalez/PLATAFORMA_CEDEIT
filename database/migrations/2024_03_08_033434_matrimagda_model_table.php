<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MatrimagdaModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Matrimagda', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombres');
        $table->string('apellidos'); 
        $table->string('identificacion');
        $table->integer('documento');
        $table->string('lugarexpe');
        $table->date('fechaexpe');
        $table->string('nacimiento');
        $table->date('nacifecha');
        $table->string('direccion');
        $table->string('estrato');
        $table->string('correo');
        $table->bigInteger('celular1')->nullable();
        $table->bigInteger('celular2')->nullable();
        $table->string('institucion');
        $table->string('titulo');
        $table->integer('año');
        $table->string('institucion2')->nullable();
        $table->string('titulo2')->nullable();
        $table->integer('año2')->nullable();
        $table->string('programa');
        $table->string('modalidad');
        $table->text('sexo')->nullable();
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
        Schema::dropIfExists('Matrimagda');
    }
}
