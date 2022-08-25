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
        Schema::connection('pdv')->create('pagamento', function (Blueprint $table) {
            $table->id('idPagamento');
            $table->integer('idCaixa')->nullable();
            $table->integer('TipoModalidade')->nullable();
            $table->string('Descricao')->nullable();
            $table->decimal('Valor', 19, 2)->default('0.000');
            $table->boolean('Sincronizado')->default(0);
            $table->dateTime('DataHora')->nullable();
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
        Schema::connection('pdv')->dropIfExists('pagamento');
    }
};
