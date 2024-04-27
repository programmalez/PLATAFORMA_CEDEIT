<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatricedeitModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Matricedeit', function (Blueprint $table) {
            $table->string('nombres1');
            $table->string('nombres2')->nullable();
            $table->string('apellido1');
            $table->string('apellido2')->nullable();
            $table->string('identificacion');
            $table->integer('documento');
            $table->string('lugarexpe');
            $table->date('fechaexpe');
            $table->string('lugarnaci');
            $table->date('fechanaci');
            $table->integer('edad');
            $table->string('direccion');
            $table->string('municipio');
            $table->string('departamento');
            $table->bigInteger('celular1')->nullable();
            $table->bigInteger('celular2')->nullable();
            $table->string('correo');
            $table->string('expulsor');
            $table->string('describa');
            $table->string('describa2');
            $table->string('describa3');
            $table->text('estado_civil')->nullable();
            $table->boolean('en_desplazamiento')->default(false);
            $table->boolean('desvinculados')->default(false);
            $table->boolean('raizales')->default(false);
            $table->boolean('afrocolombianos')->default(false);
            $table->boolean('indigenas')->default(false);
            $table->boolean('rom')->default(false);
            $table->boolean('fisica')->default(false);
            $table->boolean('cognitiva')->default(false);
            $table->boolean('excepciones')->default(false);
            $table->string('programa');
            $table->bigIncrements('id');
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
        Schema::dropIfExists('Matricedeit');
    }
}
