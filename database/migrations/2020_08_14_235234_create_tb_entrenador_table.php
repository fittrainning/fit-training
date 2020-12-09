<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbEntrenadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_entrenador', function (Blueprint $table) {
            $table->string('Ent_Usu_id')->primary()->references('Usu_id')->on('tb_usuarios')->onDelete('cascade');
            $table->string('Ent_ficha');
            $table->string('Ent_nivel_de_formacion');
            $table->string('Ent_Deporte');
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
        Schema::dropIfExists('tb_entrenador');
    }
}
