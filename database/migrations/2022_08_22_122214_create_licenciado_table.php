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
        Schema::connection('pdv')->create('licenciado', function (Blueprint $table) {
            $table->id();
            $table->string('CodLicenciado')->nullable();
            $table->string('Codigo')->nullable();
            $table->string('Nome')->nullable();
            $table->string('Tipo')->nullable();
            $table->string('documento1')->nullable();
            $table->string('documento2')->nullable();
            $table->string('NomeUsual')->nullable();
            $table->string('CEP')->nullable();
            $table->string('Logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('Complemento')->nullable();
            $table->string('Bairro')->nullable();
            $table->string('fone1')->nullable();
            $table->string('fone2')->nullable();
            $table->string('Contato')->nullable();
            $table->string('email')->nullable();
            $table->char('ativo', 1)->nullable();
            $table->string('cargo')->nullable();
            $table->string('EstadoID')->nullable();
            $table->string('CidadeID')->nullable();
            $table->string('Documento3')->nullable();
            $table->string('Tipo_Fiscal')->nullable();
            $table->string('Tipo_Atividade')->nullable();
            $table->string('Cidade')->nullable();
            $table->char('UF', 2)->nullable();
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
        Schema::connection('pdv')->dropIfExists('licenciado');
    }
};
