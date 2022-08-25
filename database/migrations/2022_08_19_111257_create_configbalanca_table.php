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
        Schema::connection('pdv')->create('configbalanca', function (Blueprint $table) {
            $table->id('idConfigBalanca');
            $table->integer('TipoBalanca')->nullable();
            $table->string('PortaSerial', 10)->nullable();
            $table->integer('BaudRate', 11)->nullable();
            $table->integer('DataBits', 11)->nullable();
            $table->string('Parity', 10)->nullable();
            $table->string('StopBits', 10)->nullable();
            $table->string('HandShaking', 10)->nullable();
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
        Schema::connection('pdv')->dropIfExists('configbalanca');
    }
};
