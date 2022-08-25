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
        Schema::connection('pdv')->create('cupomrecfiado', function (Blueprint $table) {
            $table->id('idCupomRecFiado');
            $table->integer('idCupomRecebimento')->nullable();
            $table->integer('idCliente')->nullable();
            $table->string('CodSistema', 40)->nullable();
            $table->string('CNPJ', 14)->nullable();
            $table->string('Placa', 8)->nullable();
            $table->string('Veiculo', 50)->nullable();
            $table->string('Motorista', 50)->nullable();
            $table->integer('KM')->nullable();
            $table->integer('idCentroCusto')->nullable();
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
        Schema::connection('pdv')->dropIfExists('cupomrecfiado');
    }
};
