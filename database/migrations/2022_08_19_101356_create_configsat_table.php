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
        Schema::connection('pdv')->create('configsat', function (Blueprint $table) {
            $table->id();
            $table->integer('NumeroCaixa')->nullable();
            $table->integer('Ambiente')->nullable();
            $table->string('VersaoDados')->nullable();
            $table->integer('RegTributario')->nullable();
            $table->integer('RegTributarioISSQN')->nullable();
            $table->integer('IndRatISSQN')->nullable();
            $table->string('VersaoDados')->nullable();
            $table->integer('IPServico')->nullable();
            $table->string('SWCNPJ')->nullable();
            $table->string('SWAssinatura', 300)->nullable();
            $table->string('EmitCNPJ')->nullable();
            $table->string('EmitIE')->nullable();
            $table->string('EmitIM')->nullable();
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
        Schema::connection('pdv')->dropIfExists('configsat');
    }
};
