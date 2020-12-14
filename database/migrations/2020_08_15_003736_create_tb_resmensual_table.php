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
            $table->Integer('Rem_id')->autoIncrement();
            $table->Integer('Rem_Tes_id')->nullable();
            $table->string('Rem_Usu_id');
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
