<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_test', function (Blueprint $table) {
            $table->Integer('Tes_id')->autoIncrement();
            $table->string('Tes_nombre');
            $table->string('Tes_capacidad');
            $table->string('Tes_objetivo');
            $table->string('Tes_desarrollo');
            $table->string('Tes_material');
            $table->string('Tes_evaluacion');
            $table->string('Tes_imagen');
            $table->string('Tes_icono');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_test');
    }
}
