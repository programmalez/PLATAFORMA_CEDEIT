<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromagdalenaModelsCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promagdalena', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('programa');
            $table->string('facultad');
            $table->integer('codigo');
            $table->string('formacion');
            $table->string('oferta');
            $table->text('profesional');
            $table->text('ocupacional');
            $table->string('titulo');
            $table->text('registro');
            $table->integer('creditos');
            $table->string('metodologia');
            $table->integer('semestre');
            $table->text('texto');
            $table->string('imagen')->nullable();
            $table->string('documento')->nullable();
            
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
        Schema::dropIfExists('promagdalena');
    }
}
