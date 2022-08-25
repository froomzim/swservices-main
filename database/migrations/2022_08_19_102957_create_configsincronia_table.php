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
        Schema::connection('pdv')->create('configsincronia', function (Blueprint $table) {
            $table->id();
            $table->integer('TipoBanco')->nullable();
            $table->string('Host', 100)->nullable();
            $table->string('Usuario', 100)->nullable();
            $table->string('Senha', 100)->nullable();
            $table->string('DataBase', 100)->nullable();
            $table->integer('Porta')->nullable();
            $table->integer('idUnidadeOperacional')->nullable();
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
        Schema::connection('pdv')->dropIfExists('configsincronia');
    }
};
