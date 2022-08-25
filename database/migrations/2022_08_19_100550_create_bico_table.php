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
        Schema::connection('pdv')->create('bico', function (Blueprint $table) {
            $table->id('idBico');
            $table->integer('idBicoSWERP')->nullable();
            $table->string('Canal', 2)->nullable();
            $table->string('Bico', 30)->nullable();
            $table->decimal('vUnitario', 6, 3)->nullable();
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
        Schema::connection('pdv')->dropIfExists('bico');
    }
};
