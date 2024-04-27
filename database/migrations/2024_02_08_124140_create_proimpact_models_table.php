<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProimpactModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursimpa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('curso');
            $table->unsignedBigInteger('licencia');
            $table->text('perfil');
            $table->integer('cuatri');
            $table->string('imagen')->nullable();
            $table->string('documento')->nullable();
            $table->string('titulo');
            $table->string('modalidad');
            $table->text('texto');
            
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
        Schema::dropIfExists('proimpact_models');
    }
}
