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
        Schema::connection('pdv')->create('frota', function (Blueprint $table) {
            $table->id();
            $table->integer('CodSistema')->nullable();
            $table->string('Placa')->nullable();
            $table->string('Motorista')->nullable();
            $table->string('Veiculo')->nullable();
            $table->integer('idCentroCusto')->nullable();
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
        Schema::connection('pdv')->dropIfExists('frota');
    }
};
