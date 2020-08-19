<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSeleccioncapacidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_seleccioncapacidad', function (Blueprint $table) {
            $table->integer('Sec_Cap_Dos_Mes_Pla_id')->references('Cap_Dos_Mes_Pla_id')->on('tb_capacidad')->onUpdate('cascade');
            $table->tinyInteger('Sec_Cap_Dos_Mes_id')->references('Cap_Dos_Mes_id')->on('tb_capacidad')->onUpdate('cascade');
            $table->tinyInteger('Sec_Cap_Dos_Dosificacion')->references('Cap_Dos_Dosificacion')->on('tb_capacidad')->onUpdate('cascade');
            $table->Integer('Sec_Cap_Capacidad')->references('Cap_Capacidad')->on('tb_capacidad')->onUpdate('cascade');
            $table->Integer('Sec_id');
            $table->string('Sec_nombre');
            $table->string('Sec_descripcion');
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
        Schema::dropIfExists('tb_seleccioncapacidad');
    }
}
