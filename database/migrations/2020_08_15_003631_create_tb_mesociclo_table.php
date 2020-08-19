<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMesocicloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mesociclo', function (Blueprint $table) {
            $table->bigIncrements('Mes_Pla_id')->references('Pla_id')->on('tb_planentrenamiento')->onUpdate('cascade');
            $table->tinyInteger('Mes_id');
            $table->float('Mes_volumen_meso');
            $table->float('Mes_intensidad_meso');
            $table->date('Mes_fecini');
            $table->date('Mes_fecfin');
            $table->tinyInteger('Mes_nummes');
            $table->Integer('Mes_minutos_totales');
            $table->Integer('Mes_num_Sesxmes');
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
        Schema::dropIfExists('tb_mesociclo');
    }
}
