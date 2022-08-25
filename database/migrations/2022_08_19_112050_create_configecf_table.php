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
        Schema::connection('pdv')->create('configecf', function (Blueprint $table) {
            $table->id();
            $table->integer('Modelo')->nullable();
            $table->string('Porta', 200)->nullable();
            $table->integer('TimeOut')->nullable();
            $table->integer('IntervaloPosComando')->nullable();
            $table->boolean('TentarNovamente')->nullable();
            $table->boolean('BloqueiaMouseTeclado')->nullable();
            $table->boolean('ExibeMsgAguarde')->nullable();
            $table->boolean('GavetaSinalInvert')->nullable();
            $table->boolean('ArredondaPorQtde')->nullable();
            $table->string('MSGAguarde', 300)->nullable();
            $table->string('ArqLog', 200)->nullable();
            $table->string('SerialParams', 200)->nullable();
            $table->string('Operador', 50)->nullable();
            $table->boolean('GerarRFD')->nullable();
            $table->string('DirRFD', 300)->nullable();
            $table->string('SH_RazaoSocial', 100)->nullable();
            $table->integer('SH_C00')->nullable();
            $table->string('SH_CNPJ', 14)->nullable();
            $table->string('SH_IM', 14)->nullable();
            $table->string('SH_IE', 14)->nullable();
            $table->string('SH_Aplicativo', 50)->nullable();
            $table->integer('SH_NumeroAplic')->nullable();
            $table->string('SH_VersaoAplic', 20)->nullable();
            $table->string('SH_Linha1', 100)->nullable();
            $table->string('SH_Linha2', 100)->nullable();
            $table->string('NumeroFabricacao', 50)->nullable();
            $table->integer('mf_Adicional')->nullable();
            $table->string('Tipo', 10)->nullable();
            $table->string('Marca', 20)->nullable();
            $table->string('VersaoSB', 6)->nullable();
            $table->string('CodigoNacional', 6)->nullable();
            $table->dateTime('DataHoraInstalacao')->nullable();
            $table->string('CNPJECF', 14)->nullable();
            $table->string('IEECF', 14)->nullable();
            $table->integer('NumOrdemSeq')->nullable();
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
        Schema::connection('pdv')->dropIfExists('configecf');
    }
};
