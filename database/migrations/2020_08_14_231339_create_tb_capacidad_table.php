<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCapacidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_capacidad', function (Blueprint $table) {
            $table->bigIncrements('Cap_Dos_Mes_Pla_id')->references('Dos_Mes_Pla_id')->on('tb_dosificacion')->onUpdate('cascade');
            $table->tinyInteger('Cap_Dos_Mes_id')->references('Dos_Mes_id')->on('tb_dosificacion')->onUpdate('cascade');
            $table->tinyInteger('Cap_Dos_Dosificacion')->references('Dos_Dosificacion')->on('tb_dosificacion')->onUpdate('cascade');
            $table->integer('Cap_Capacidad');
            $table->integer('Cap_Sec_id');
            $table->integer('Cap_porcenteja');
            $table->integer('Cap_tiempo');
            $table->float('Cap_num_ses');
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
        Schema::dropIfExists('tb_capacidad');
    }
}
