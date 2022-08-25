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
        Schema::connection('pdv')->create('configtefsw', function (Blueprint $table) {
            $table->id('idConfigTEFSW');
            $table->integer('modo')->nullable();
            $table->integer('Empresa')->nullable();
            $table->integer('Filial')->nullable();
            $table->integer('PDV')->nullable();
            $table->integer('FlgAtivo')->nullable();
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
        Schema::connection('pdv')->dropIfExists('configtefsw');
    }
};
