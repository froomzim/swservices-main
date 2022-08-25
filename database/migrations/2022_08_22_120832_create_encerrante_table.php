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
        Schema::create('encerrante', function (Blueprint $table) {
            $table->id('idEncerrante');
            $table->integer('idBico')->nullable();
            $table->decimal('encInicial', 22, 4)->nullable();
            $table->boolean('flgEncIniManual')->nullable();
            $table->decimal('encFinal', 22, 4)->nullable();
            $table->boolean('flgEncFinal')->nullable();
            $table->decimal('Litros', 22, 4)->nullable();
            $table->decimal('Afericao', 22, 4)->nullable();
            $table->decimal('VUnitMedio', 6, 3)->nullable();
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
        Schema::dropIfExists('encerrante');
    }
};
