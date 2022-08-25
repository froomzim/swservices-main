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
        Schema::connection('pdv')->create('tefdial', function (Blueprint $table) {
            $table->id('idTefDial');
            $table->integer('Habilitado')->nullable();
            $table->string('ArqLog', 250)->nullable();
            $table->string('ArqResp', 250)->nullable();
            $table->string('ArqReq', 250)->nullable();
            $table->string('ArqSTS', 250)->nullable();
            $table->string('ArqTem', 250)->nullable();
            $table->integer('AutoAtivarGP')->nullable();
            $table->integer('EsperarSTS')->nullable();
            $table->string('GPExeName', 300)->nullable();
            $table->integer('LogDebug')->nullable();
            $table->integer('NumVias')->nullable();
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
        Schema::connection('pdv')->dropIfExists('tefdial');
    }
};
