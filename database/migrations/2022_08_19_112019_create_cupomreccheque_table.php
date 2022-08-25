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
        Schema::connection('pdv')->create('cupomreccheque', function (Blueprint $table) {
            $table->id('idCupomRecCheque');
            $table->integer('idCupomRecebimento')->nullable();
            $table->string('CodSistemaCliente')->nullable();
            $table->string('CPF')->nullable();
            $table->string('Nome')->nullable();
            $table->string('Telefone')->nullable();
            $table->string('Celular')->nullable();
            $table->string('CEP')->nullable();
            $table->string('Logradouro')->nullable();
            $table->string('Numero')->nullable();
            $table->string('Complemento')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('Cidade')->nullable();
            $table->char('UF', 2)->nullable();
            $table->integer('Banco')->nullable();
            $table->string('Agencia')->nullable();
            $table->string('ContaCorrente')->nullable();
            $table->string('Serie')->nullable();
            $table->string('NumeroCheque')->nullable();
            $table->decimal('Valor', 19,12);
            $table->dateTime('RecebidoEm');
            $table->dateTime('DataDescontar');
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
        Schema::connection('pdv')->dropIfExists('cupomreccheque');
    }
};
