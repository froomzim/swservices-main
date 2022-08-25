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
        Schema::connection('pdv')->create('satxml', function (Blueprint $table) {
            $table->id('idSATXML');
            $table->integer('idCupom');
            $table->boolean('Cancelado')->default(0);
            $table->boolean('sincronizado')->default(0);
            $table->binary('xml');
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
        Schema::connection('pdv')->dropIfExists('satxml');
    }
};
