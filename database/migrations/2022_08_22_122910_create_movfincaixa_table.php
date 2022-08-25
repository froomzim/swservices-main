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
        Schema::connection('pdv')->create('movfincaixa', function (Blueprint $table) {
            $table->id('idMovFinCaixa');
            $table->dateTime('DataHora')->nullable();
            $table->char('FlgSangria')->nullable();
            $table->smallInteger('FlgSangria')->nullable();
            $table->decimal('Valor', 19, 2)->default('0.000');
            $table->integer('idCaixaAbertura')->nullable();
            $table->integer('sincronizado')->default('0');
            $table->string('CodCartao')->nullable();
            $table->integer('idCartao')->nullable();
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
        Schema::connection('pdv')->dropIfExists('movfincaixa');
    }
};
