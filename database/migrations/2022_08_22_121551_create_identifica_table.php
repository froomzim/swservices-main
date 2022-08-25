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
        Schema::connection('pdv')->create('identifica', function (Blueprint $table) {
            $table->id('idIdentifica');
            $table->string('CNPJ')->nullable();
            $table->string('Nome')->nullable();
            $table->string('Logradouro')->nullable();
            $table->string('Numero')->nullable();
            $table->string('Complemento')->nullable();
            $table->string('Bairro')->nullable();
            $table->char('UF', 2)->nullable();
            $table->string('Cidade')->nullable();
            $table->integer('idCupom')->nullable();
            $table->string('Placa')->nullable();
            $table->decimal('Valor', 15, 2)->nullable();
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
        Schema::connection('pdv')->dropIfExists('identifica');
    }
};
