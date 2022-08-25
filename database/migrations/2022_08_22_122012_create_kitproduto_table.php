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
        Schema::connection('pdv')->create('kitproduto', function (Blueprint $table) {
            $table->id('idKitProduto');
            $table->integer('idKit')->nullable();
            $table->integer('idProduto')->nullable();
            $table->decimal('Quantidade', 19, 4)->nullable();
            $table->decimal('Unitario', 19, 4)->nullable();
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
        Schema::connection('pdv')->dropIfExists('kitproduto');
    }
};
