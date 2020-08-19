<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbResmensualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_resmensual', function (Blueprint $table) {
            $table->bigIncrements('Rem_id');
            $table->integer('Rem_Tes_id')->references('Tes_id')->on('tb_test')->onUpdate('cascade');
            $table->string('Rem_Usu_id')->references('Dep_Usu_id')->on('tb_deportistas')->onUpdate('cascade');
            $table->date('Rem_fecha');
            $table->float('Rem_resultado');
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
        Schema::dropIfExists('tb_resmensual');
    }
}
