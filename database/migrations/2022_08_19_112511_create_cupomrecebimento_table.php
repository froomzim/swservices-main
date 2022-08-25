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
        Schema::connection('pdv')->create('cupomrecebimento', function (Blueprint $table) {
            $table->id('idCupomRecebimento');
            $table->integer('idCupom');
            $table->integer('TipoRecebimento');
            $table->decimal('ValorRecebido', 19, 4);
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
        Schema::connection('pdv')->dropIfExists('cupomrecebimento');
    }
};
