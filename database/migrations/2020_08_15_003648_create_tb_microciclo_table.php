<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMicrocicloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_microciclo', function (Blueprint $table) {
            $table->bigIncrements('Mic_Pla_id')->references('Pla_id')->on('tb_planentrenamiento')->onUpdate('cascade');
            $table->tinyInteger('Mic_Mes_id')->references('Mes_id')->on('tb_mesociclo')->onUpdate('cascade');
            $table->tinyInteger('Mic_id');
            $table->tinyInteger('Mic_Nombre');
            $table->string('Mic_tipo');
            $table->date('Mic_dias');
            $table->string('Mic_capacidad');
            $table->string('Mic_duracion');
            $table->tinyInteger('Mic_numero_Ses');
            $table->tinyInteger('Mic_volumen_micro');
            $table->tinyInteger('Mic_intensidad_micro');
            $table->tinyInteger('Mic_Eta_Id')->references('Eta_Id')->on('tb_etapa')->onUpdate('cascade');
            $table->tinyInteger('Mic_Per_id')->references('Per_id')->on('tb_periodo')->onUpdate('cascade');
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
        Schema::dropIfExists('tb_microciclo');
    }
}
