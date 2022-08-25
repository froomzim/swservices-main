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
        Schema::connection('pdv')->create('recebimento', function (Blueprint $table) {
            $table->id('idRecebimento');
            $table->integer('idCaixa');
            $table->integer('TipoModalidade')->nullable();
            $table->string('Descricao', 200)->nullable();
            $table->decimal('Valor', 19, 4)->nullable();
            $table->boolean('Sincronizado')->default(0);
            $table->dateTime('DataHora')->nullable();
            $table->string('CodCliente', 40)->nullable();
            $table->string('Guid', 40)->nullable();
            $table->string('OrigemGuid', 40)->nullable();
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
        Schema::connection('pdv')->dropIfExists('recebimento');
    }
};
