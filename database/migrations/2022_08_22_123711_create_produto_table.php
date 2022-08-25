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
        Schema::connection('pdv')->create('produto', function (Blueprint $table) {
            $table->id('idProduto');
            $table->string('CodSistema');
            $table->string('CodProduto');
            $table->string('cEAN')->nullable();
            $table->string('Produto')->nullable();
            $table->integer('CFOP')->nullable();
            $table->char('unidCom', 2)->nullable();
            $table->decimal('qCom', 19, 4)->default('0.000')->nullable();
            $table->decimal('vUnitario', 19, 4)->default('0.000')->nullable();
            $table->char('indRegra', 1)->nullable();
            $table->integer('ICMSOrigem')->nullable();
            $table->integer('ICMSCST')->nullable();
            $table->decimal('ICMSALIQ', 6, 3)->default('0.000')->nullable();
            $table->integer('PISCST')->nullable();
            $table->decimal('PISALIQ', 6, 3)->default('0.000')->nullable();
            $table->decimal('PISpercReducao', 6, 3)->default('0.000')->nullable();
            $table->integer('COFINSCST')->nullable();
            $table->decimal('COFINSALIQ', 6, 3)->default('0.000')->nullable();
            $table->decimal('COFINSPercReducao', 6, 3)->default('0.000')->nullable();
            $table->decimal('PISSTAliqProd', 19, 4)->default('0.000')->nullable();
            $table->string('InfAProd')->nullable();
            $table->integer('NCM')->nullable();
            $table->char('TipoAliqECF', 2)->nullable();
            $table->char('VendaFracionada', 1)->default(0);
            $table->char('DiasTroca', 1)->default(0);
            $table->decimal('Desconto', 19, 4)->default('0.000')->nullable();
            $table->char('flgComissao', 1)->default(0);
            $table->string('CodGrupo')->nullable();
            $table->string('codSubGrupo')->nullable();
            $table->string('Bico')->nullable();
            $table->integer('idTipo')->nullable();
            $table->string('CodigoANP')->nullable();
            $table->boolean('FlgPermiteFaturar', 1)->default(1);
            $table->char('flgDigitarDescricao', 1)->default(0);
            $table->char('flgDigitarUnitario', 1)->default(0);
            $table->decimal('preco_atacado', 19, 4)->default('0.000')->nullable();
            $table->integer('qtd_atacado')->nullable();
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
        Schema::connection('pdv')->dropIfExists('produto');
    }
};
