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
        Schema::connection('pdv')->create('cupomreccartao', function (Blueprint $table) {
            $table->id('idCupomRecCartao');
            $table->integer('idCupomRecebimento')->nullable();
            $table->integer('idCartao')->nullable();
            $table->string('CodSistema')->nullable();
            $table->integer('NParcelas')->nullable();
            $table->decimal('Taxa', 10, 3)->nullable();
            $table->decimal('Valor', 19, 4)->nullable();
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
        Schema::connection('pdv')->dropIfExists('cupomreccartao');
    }
};
