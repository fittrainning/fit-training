<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->bigIncrements('Usu_id');
            $table->string('Usu_tipodoc');
            $table->string('Usu_nombre');
            $table->string('Usu_apellidos');
            $table->string('Usu_correo');
            $table->date('Usu_fecha_nacimiento');
            $table->string('Usu_telefono');
            $table->string('Usu_contrasena');
            $table->string('Usu_genero');
            $table->string('Usu_direccion');
            $table->string('Usu_rol');
            $table->binary('Usu_foto');
            $table->string('Usu_verificacion');
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
        Schema::dropIfExists('tb_usuarios');
    }
}
