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
            $table->integer('LinhasPular')->nullable();
            $table->boolean('TraduzirTag')->nullable();
            $table->boolean('IgnorarTag')->nullable();
            $table->string('ArqLog', 100)->nullable();
            $table->integer('PaginaDeCodigo', 11)->nullable();
            $table->integer('BarrasLargura', 11)->nullable();
            $table->integer('BarrasAltura', 11)->nullable();
            $table->integer('QRCodeTipo', 11)->nullable();
            $table->integer('QrCodeLargura', 11)->nullable();
            $table->integer('ErorLevel', 11)->nullable();
            $table->integer('LogoKC1', 11)->nullable();
            $table->integer('LogoKC2', 11)->nullable();
            $table->integer('LogoFatorX', 11)->nullable();
            $table->integer('LogoFatorY', 11)->nullable();
            $table->boolean('ExibeNumero')->nullable();
            $table->boolean('ControlePorta')->nullable();
            $table->boolean('CortaPapel')->nullable();
            $table->varchar('CabecalhoDestaque', 48)->nullable();
            $table->binary('CabecalhoCorpo')->nullable();
            $table->binary('RodapeCorpo')->nullable();
            $table->integer('UltimoCOO', 20)->default(0);



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
