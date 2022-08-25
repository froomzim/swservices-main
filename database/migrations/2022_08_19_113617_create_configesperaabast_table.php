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
        Schema::connection('pdv')->create('configesperaabast', function (Blueprint $table) {
            $table->id();
            $table->integer('Ativo')->nullable();
            $table->integer('TempoEsperaMin')->nullable();
            $table->integer('flgFiscal')->nullable();
            $table->integer('flgImprimir')->nullable();
            $table->integer('GeraAutomatico')->nullable();
            $table->decimal('Desconto', 6, 3)->nullable();
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
        Schema::connection('pdv')->dropIfExists('configesperaabast');
    }
};
