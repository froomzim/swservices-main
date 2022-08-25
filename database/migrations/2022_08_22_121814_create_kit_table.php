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
        Schema::create('kit', function (Blueprint $table) {
            $table->id('idKIT');
            $table->string('Nome')->nullable();
            $table->decimal('Valor', 19, 3)->default('0.000');
            $table->dateTime('DataInicio')->nullable();
            $table->dateTime('DataFim')->nullable();
            $table->string('CodigoKit')->nullable();
            $table->string('CodSistema')->nullable();
            $table->string('CodEan')->nullable();
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
        Schema::dropIfExists('kit');
    }
};
