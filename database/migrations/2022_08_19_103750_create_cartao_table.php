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
        Schema::connection('pdv')->create('cartao', function (Blueprint $table) {
            $table->id('idCartao');
            $table->tinyInteger('Debito')->nullable();
            $table->string('Cartao', 50)->nullable();
            $table->tinyInteger('flgParcelas')->nullable();
            $table->string('CodSistema', 40)->nullable();
            $table->tinyInteger('flgIdentificaCliente')->nullable();
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
        Schema::connection('pdv')->dropIfExists('cartao');
    }
};
