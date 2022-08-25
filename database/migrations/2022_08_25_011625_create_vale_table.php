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
        Schema::connection('pdv')->create('vale', function (Blueprint $table) {
            $table->id('idVale');
            $table->string('Vale', 50)->nullable();
            $table->integer('Ativo')->default(0);
            $table->integer('FlgDataIndeterminada')->nullable();
            $table->dateTime('DataValidade')->nullable();
            $table->integer('idUnidadeOperacional')->nullable();
            $table->string('Produto', 60)->nullable();
            $table->integer('Qtde')->nullable();
            $table->string('Observacao', 200)->nullable();
            $table->integer('DiasValidade')->nullable();
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
        Schema::connection('pdv')->dropIfExists('vale');
    }
};
