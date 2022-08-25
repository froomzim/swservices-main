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
        Schema::connection('pdv')->create('cupom', function (Blueprint $table) {
            $table->id('idCupom');
            $table->integer('idCaixa');
            $table->dateTime('DataCupom');
            $table->string('CNPJ', 14)->nullable();
            $table->integer('COO')->nullable();
            $table->decimal('TotalItem', 19, 4)->default('0.00');
            $table->decimal('Desconto', 19, 4)->default('0.00');
            $table->decimal('Acrescimo', 19, 4)->default('0.00');
            $table->decimal('TotalCupom', 19, 4)->default('0.00');
            $table->decimal('TotalRecebido', 19, 4)->default('0.00');
            $table->integer('flgCancelado')->default(false);
            $table->dateTime('DataCancelamento')->nullable();
            $table->integer('flgSincronizado')->default(false);
            $table->smallInteger('TipoCupom')->nullable();
            $table->string('CodVendedor', 40)->nullable();
            $table->string('CodSistema', 40)->nullable();
            $table->string('GuidPreVenda', 40)->nullable();
            $table->string('CodCliente', 40)->nullable();
            $table->string('JustificaCanc', 300)->nullable();
            $table->string('strIDSPreVenda', 100)->nullable();
            $table->decimal('TotalDescEspera', 19, 2)->default('0.00');
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
        Schema::connection('pdv')->dropIfExists('cupom');
    }
};
