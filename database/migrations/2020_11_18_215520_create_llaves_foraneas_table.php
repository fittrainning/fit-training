<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlavesForaneasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('tb_capacidad', function (Blueprint $table) {
            $table->foreign('Cap_Dos_Id')->references('Dos_Id')->on('tb_dosificacion')->onUpdate('cascade');
            $table->foreign('Cap_Sec_Id')->references('Sec_Id')->on('tb_seleccioncapacidad')->onUpdate('cascade');
        });

        Schema::table('tb_dosificacion', function (Blueprint $table) {
            $table->foreign('Dos_Mes_Id_Gen')->references('Mes_Id_Gen')->on('tb_mesociclo')->onUpdate('cascade');
        });

        Schema::table('tb_sesion', function (Blueprint $table) {
            $table->foreign('Ses_Mic_Id_Gen')->references('Mic_Id_Gen')->on('tb_microciclo')->onUpdate('cascade');
        });

        Schema::table('tb_fed', function (Blueprint $table) {
            $table->foreign('Fed_id_Dir')->references('Dir_Usu_id')->on('tb_director')->onUpdate('cascade');
            $table->foreign('Fed_id_Ent')->references('Ent_Usu_id')->on('tb_entrenador')->onUpdate('cascade');
        });

        Schema::table('tb_resmensual', function (Blueprint $table) {
            $table->foreign('Rem_Tes_id')->references('Tes_id')->on('tb_test')->onUpdate('cascade');
            $table->foreign('Rem_Usu_id')->references('Dep_Usu_id')->on('tb_deportistas')->onUpdate('cascade');
        });

        Schema::table('tb_deportistas', function (Blueprint $table) {
            $table->foreign('Dep_Cod_Fic')->references('Fic_Cod')->on('tb_ficha')->onUpdate('cascade');
            $table->foreign('Dep_cod_Dee')->references('Dee_cod')->on('tb_deporte')->onUpdate('cascade');
            $table->foreign('Dep_id_Ana')->references('Ana_id')->on('tb_anamnesis')->onUpdate('cascade');
        });

        Schema::table('tb_caracterizacion', function (Blueprint $table) {
            $table->foreign('Car_id')->references('Dee_cod')->on('tb_deporte')->onUpdate('cascade');
        });

        Schema::table('tb_microciclo', function (Blueprint $table) {
            $table->foreign('Mic_Mes_Id_Gen')->references('Mes_Id_Gen')->on('tb_mesociclo')->onUpdate('cascade');
            $table->foreign('Mic_Eta_Id')->references('Eta_Id')->on('tb_etapa')->onUpdate('cascade');
            $table->foreign('Mic_Per_id')->references('Per_id')->on('tb_periodos')->onUpdate('cascade');
        });

        Schema::table('tb_mesociclo', function (Blueprint $table) {
            $table->foreign('Mes_Pla_Id')->references('Pla_id')->on('tb_planentrenamiento')->onUpdate('cascade');
        });
        
        Schema::table('tb_planentrenamiento', function (Blueprint $table) {
            $table->foreign('Pla_id_Ent')->references('Ent_Usu_id')->on('tb_entrenador');
            $table->foreign('Pla_id_Dep')->references('Dep_Usu_id')->on('tb_deportistas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llaves_foraneas');
    }
}
