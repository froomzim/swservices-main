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
        Schema::connection('pdv')->create('clisitef', function (Blueprint $table) {
            $table->id('idCliSiTEF');
            $table->string('ArqLog', 255)->nullable();
            $table->string('CodigoLoja', 20)->nullable();
            $table->string('DataHoraFiscal', 20)->nullable();
            $table->string('DocumentoFiscal', 20)->nullable();
            $table->string('EnderecoIP', 255)->nullable();
            $table->tinyInteger('ExibirErroRetorno')->default(0);
            $table->tinyInteger('LogDebug')->default(0);
            $table->tinyInteger('Habilitado')->default(0);
            $table->string('NumeroTerminal', 20)->nullable();
            $table->integer('OperacaoADM')->nullable();
            $table->integer('OperacaoATV')->nullable();
            $table->integer('OperacaoCHQ')->nullable();
            $table->integer('OperacaoCNC')->nullable();
            $table->integer('OperacaoCRT')->nullable();
            $table->integer('OperacaoReimpressao')->nullable();
            $table->string('Restricoes', 255)->nullable();
            $table->integer('PortaPinPad')->nullable();
            $table->tinyInteger('UsaUFT8')->default(0);
            $table->string('CodigoLoja', 20)->nullable();
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
        Schema::connection('pdv')->dropIfExists('clisitef');
    }
};
