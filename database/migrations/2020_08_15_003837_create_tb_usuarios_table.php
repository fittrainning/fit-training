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
            $table->id();
            $table->string('Usu_id');
            $table->string('Usu_tipodoc');
            $table->string('name');
            $table->string('Usu_apellidos');
            $table->string('email')->unique();
            $table->string('Usu_fecha_nacimiento');
            $table->string('Usu_telefono');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('Usu_genero');
            $table->string('Usu_direccion');
            $table->string('Usu_rol');
            $table->string('Usu_foto');
            $table->timestamps();
            $table->rememberToken();
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
