<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbEtapaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_etapa', function (Blueprint $table) {
            $table->tinyIncrements('Eta_Id');
            $table->string('Eta_nombre');
            $table->date('Eta_Fecini');
            $table->date('Eta_Fecfin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_etapa');
    }
}
