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
        Schema::connection('pdv')->create('caixaabertura', function (Blueprint $table) {
            $table->id('idCaixaAbertura');
            $table->dateTime('DataHora');
            $table->integer('Turno');
            $table->integer('Box');
            $table->integer('idOperador');
            $table->dateTime('DataEncerramento')->nullable();
            $table->string('NomeBD');
            $table->tinyInteger('sincronizado')->default(0);
            $table->tinyInteger('IdentificaVendedor')->default(0);
            $table->tinyInteger('IdentificaporItem')->default(0);
            $table->tinyInteger('flgTrocoCartao')->default(0);
            $table->tinyInteger('SincronizadoAbertura')->default(0);
            $table->tinyInteger('SincronizadoFechamento')->default(0);
            $table->decimal('limiteDiferenca', 19, 4)->default('0.0000');
            $table->decimal('limiteDesconto', 6, 3)->default('0.0000');
            $table->decimal('TrocoAbertura', 19, 2)->default('0.0000');
            $table->decimal('TrocoEncerramento', 19, 2)->default('0.0000');
            $table->string('CodSistema', 40)->nullable();
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
        Schema::connection('pdv')->dropIfExists('caixaabertura');
    }
};
