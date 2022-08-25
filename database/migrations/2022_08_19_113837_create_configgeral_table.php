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
        Schema::connection('pdv')->create('configgeral', function (Blueprint $table) {
            $table->id();
            $table->string('CaminhoIBPT')->nullable();
            $table->integer('ImpressaoPadrao')->nullable();
            $table->integer('idConfig')->nullable();
            $table->string('CodLicenciado', 40)->nullable();
            $table->string('NomeLicenciado', 100)->nullable();
            $table->string('CNPJLicenciado', 14)->nullable();
            $table->boolean('IdentificaFuncionario')->default(0);
            $table->boolean('IdentificaPorItem')->default(0);
            $table->string('SkinName', 30)->nullable();
            $table->integer('QtdeMaxItem')->nullable();
            $table->string('CaminhoTintometrico', 300)->nullable();
            $table->string('VersaoBanco')->default('0.0.0.0');
            $table->boolean('flgTouch')->default(1);
            $table->boolean('flgSangriaCartao')->default(0);
            $table->boolean('flgSangriaFiado')->default(0);
            $table->decimal('limiteDiferenca', 19, 4)->default(0);
            $table->decimal('limiteDesconto', 6, 3)->default(0);
            $table->boolean('flgcaixacartaoobrigatoriofiscal')->default(0);
            $table->boolean('flgCodigoObrigatorio')->default(0);
            $table->integer('TipoRelFechamento')->default(-1);
            $table->boolean('ImpSangriaAuto')->default(1);
            $table->integer('TamanhoCodEtiqueta')->default(4);
            $table->boolean('flgCancelaSenha')->default(0);
            $table->boolean('flgCancelaJustificativa')->default(0);
            $table->boolean('flgCarregaPlaca')->default(0);
            $table->boolean('flgImprimeDiferencaCaixa')->default(1);
            $table->string('PreFixoPreVenda')->nullable();
            $table->string('PreFixoComanda')->nullable();
            $table->boolean('BoxDefault')->default(1);
            $table->integer('idConfigGeral')->default(1);
            $table->binary('imgBanner')->nullable();
            $table->boolean('flgTrocoCartao')->default(0);
            $table->boolean('flgSenhaCancelamentoCupom')->default(1);
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
        Schema::connection('pdv')->dropIfExists('configgeral');
    }
};
