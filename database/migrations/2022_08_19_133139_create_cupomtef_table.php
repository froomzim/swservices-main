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
        Schema::connection('pdv')->create('cupomtef', function (Blueprint $table) {
            $table->id('idCupomTEF');
            $table->integer('idCupom')->nullable();
            $table->integer('idCupomRecebimento')->nullable();
            $table->string('Rede')->nullable();
            $table->string('NSU')->nullable();
            $table->decimal('ValorTotal', 15, 2)->nullable();
            $table->integer('flgDebito')->nullable();
            $table->integer('flgCredito')->nullable();
            $table->integer('flgCancelado')->nullable();
            $table->string('TipoOperacao')->nullable();
            $table->integer('Parcelas')->nullable();
            $table->string('Parcelador')->nullable();
            $table->string('Modalidade')->nullable();
            $table->string('TipoGP')->nullable();
            $table->dateTime('DataHora')->nullable();
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
        Schema::connection('pdv')->dropIfExists('cupomtef');
    }
};
