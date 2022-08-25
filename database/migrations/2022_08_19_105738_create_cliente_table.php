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
        Schema::connection('pdv')->create('cliente', function (Blueprint $table) {
            $table->id('idCliente');
            $table->string('CodSistema', 40)->nullable();
            $table->string('CodCliente', 50)->nullable();
            $table->string('CNPJ', 14)->nullable();
            $table->string('Cliente', 60)->nullable();
            $table->string('Endereco', 60)->nullable();
            $table->string('Bairro', 60)->nullable();
            $table->string('Numero', 60)->nullable();
            $table->string('Complemento', 60)->nullable();
            $table->string('Cidade', 60)->nullable();
            $table->string('UF', 2)->nullable();
            $table->string('CEP', 8)->nullable();
            $table->string('Fantasia', 30)->nullable();
            $table->integer('idTabelaEspecial')->default(0);
            $table->boolean('EmiteNFP')->default(0);
            $table->integer('NViasFiado')->default(1);
            $table->tinyInteger('PermiteFaturar')->default(1);
            $table->tinyInteger('flgNovaPlaca')->nullable();
            $table->tinyInteger('flgKmObrig')->nullable();
            $table->tinyInteger('flgMotoristaObrig')->nullable();
            $table->integer('idCentroCusto')->default(1);
            $table->string('CodCentroCusto')->default('UNICO');
            $table->decimal('CreditoDispo', 19, 2)->default(0);
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
        Schema::connection('pdv')->dropIfExists('cliente');
    }
};
