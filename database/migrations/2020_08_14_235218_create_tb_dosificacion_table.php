<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDosificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_dosificacion', function (Blueprint $table) {
            $table->tinyInteger('Dos_Mes_Pla_id')->references('Mes_Pla_id')->on('tb_mesociclo')->onUpdate('cascade');
            $table->tinyInteger('Dos_Mes_id')->references('Mes_id')->on('tb_mesociclo')->onUpdate('cascade');
            $table->tinyInteger('Dos_Dosificacion');
            $table->tinyInteger('Dos_porcentaje');
            $table->integer('Dos_minutos');
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
        Schema::dropIfExists('tb_dosificacion');
    }
}
