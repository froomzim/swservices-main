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
        Schema::connection('pdv')->create('tabelaespecial', function (Blueprint $table) {
            $table->id('idTabelaEspecial');
            $table->integer('CodTabelaSistema');
            $table->integer('codSistema')->nullable();
            $table->string('codProd', 50)->nullable();
            $table->decimal('vUnitario', 19, 4)->nullable();
            $table->decimal('Desconto', 19, 4)->nullable();
            $table->dateTime('inicio')->nullable();
            $table->dateTime('termino')->nullable();
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
        Schema::connection('pdv')->dropIfExists('tabelaespecial');
    }
};
