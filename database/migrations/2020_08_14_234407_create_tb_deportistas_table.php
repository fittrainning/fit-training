<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDeportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_deportistas', function (Blueprint $table) {
            $table->string('Dep_Usu_id');
            $table->string('Dep_deporte');
            $table->integer('Dep_estado');
            $table->string('Dep_razon');
            $table->integer('Dep_Cod_Fic')->references('Cod_Fic')->on('tb_ficha')->onUpdate('cascade');
            $table->integer('Dep_cod_Dee')->references('Dee_cod')->on('tb_deporte')->onUpdate('cascade');
            $table->integer('Dep_id_Ana')->references('Ana_id')->on('tb_anamnesis')->onUpdate('cascade');
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
        Schema::dropIfExists('tb_deportistas');
    }
}
