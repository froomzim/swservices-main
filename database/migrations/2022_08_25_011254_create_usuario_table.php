<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connect('pdv')->create('usuario', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->string('CodSistema', 50)->nullable();
            $table->string('Usuario', 50)->nullable();
            $table->string('Senha', 50)->nullable();
            $table->boolean('flgUsuario')->default(0);
            $table->boolean('flgComissionado')->default(0);
            $table->string('Nome', 100)->nullable();
            $table->boolean('flgAdmin')->default(0);
            $table->boolean('flgSupervisor')->default(0);
            $table->SenhaSupervisor('Nome', 32)->nullable();
            $table->string('Codigo', 32)->nullable();
            $table->string('Contato', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connect('pdv')->dropIfExists('usuario');
    }
};
