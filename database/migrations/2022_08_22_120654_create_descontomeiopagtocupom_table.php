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
        Schema::connection('pdv')->create('descontomeiopagtocupom', function (Blueprint $table) {
            $table->id('idDescontoMeioPagtoCupom');
            $table->integer('idGrupo')->nullable();
            $table->integer('idSubGrupo')->nullable();
            $table->integer('idMeioPagamento')->nullable();
            $table->decimal('Desconto', 15, 2)->nullable();
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
        Schema::connection('pdv')->dropIfExists('descontomeiopagtocupom');
    }
};
