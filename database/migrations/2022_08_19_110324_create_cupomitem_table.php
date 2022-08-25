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
        Schema::connection('pdv')->create('cupomitem', function (Blueprint $table) {
            $table->id('idCupomItem');
            $table->integer('idCupom');
            $table->integer('idProduto');
            $table->string('CodSistema');
            $table->string('cEAN');
            $table->string('Produto')->nullable();
            $table->string('CodProduto');
            $table->integer('CFOP')->nullable();
            $table->string('unidCom')->nullable();
            $table->decimal('qCom', 19, 4)->nullable();
            $table->decimal('vUnitario', 19, 4)->default('0.00');
            $table->char('indRegra', 2)->default('A');
            $table->integer('ICMSOrigem')->default(0);
            $table->integer('ICMSCST')->nullable();
            $table->decimal('ICMSALIQ', 6, 3)->default('0.00');
            $table->integer('PISCST')->nullable();
            $table->decimal('PISALIQ', 6, 3)->default('0.00');
            $table->decimal('PISpercReducao', 6, 3)->default('0.00');
            $table->integer('COFINSCST')->nullable();
            $table->decimal('COFINSALIQ', 6, 3)->default('0.00');
            $table->decimal('COFINSPercReducao', 6, 3)->default('0.00');
            $table->decimal('PISSTAliqProd', 6, 3)->default('0.00');
            $table->string('InfAProd')->nullable();
            $table->integer('NCM')->nullable();
            $table->decimal('Desconto', 19, 4)->default('0.00');
            $table->decimal('Acrescimo', 19, 4)->default('0.00');
            $table->decimal('TotalItem', 19, 4)->default('0.00');
            $table->string('CodVendedor')->nullable();
            $table->text('ArqTintometrico')->nullable();
            $table->integer('idAutomacao')->nullable();
            $table->integer('idComanda')->nullable();
            $table->integer('idComandaItem')->nullable();
            $table->decimal('DescontoEspera', 19, 4)->default('0.00');
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
        Schema::connection('pdv')->dropIfExists('cupomitem');
    }
};
