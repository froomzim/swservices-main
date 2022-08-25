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
        Schema::connection('pdv')->create('configposprinter', function (Blueprint $table) {
            $table->id();
            $table->integer('Modelo');
            $table->string('Porta', 50)->nullable();
            $table->integer('Colunas')->nullable();
            $table->integer('EspacoEntreLinhas')->nullable();
            $table->integer('LinhasBuffer')->nullable();
            $table->integer('LinhasPular')->nullable();
            $table->boolean('TraduzirTag')->nullable();
            $table->boolean('IgnorarTag')->nullable();
            $table->string('ArqLog', 100)->nullable();
            $table->integer('PaginaDeCodigo')->nullable();
            $table->integer('BarrasLargura')->nullable();
            $table->integer('BarrasAltura')->nullable();
            $table->integer('QRCodeTipo')->nullable();
            $table->integer('QrCodeLargura')->nullable();
            $table->integer('ErorLevel')->nullable();
            $table->integer('LogoKC1')->nullable();
            $table->integer('LogoKC2')->nullable();
            $table->integer('LogoFatorX')->nullable();
            $table->integer('LogoFatorY')->nullable();
            $table->integer('ExibeNumero')->nullable();
            $table->integer('ControlePorta')->nullable();
            $table->integer('CortaPapel')->nullable();
            $table->string('CabecalhoDestaque', 48)->nullable();
            $table->binary('CabecalhoCorpo')->nullable();
            $table->binary('RodapeCorpo')->nullable();
            $table->bigInteger('UltimoCOO')->default(0);



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
        Schema::connection('pdv')->dropIfExists('configposprinter');
    }
};
