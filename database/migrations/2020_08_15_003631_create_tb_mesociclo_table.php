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
            $table->Integer('Mes_Id_Gen')->autoIncrement();
            $table->Integer('Mes_Pla_Id');
            $table->smallInteger('Mes_Id');
            $table->date('Mes_Fecini');
            $table->date('Mes_Fecfin');
            $table->Integer('Mes_Nummes');
            $table->Integer('Mes_Minutos_Totales');
            $table->Integer('Mes_Num_Sesxmes');
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
