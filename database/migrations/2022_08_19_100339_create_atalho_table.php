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
        Schema::connection('pdv')->create('atalho', function (Blueprint $table) {
            $table->id('idAtalho');
            $table->string('CodigoAtalho1', 30)->nullable();
            $table->string('CodigoAtalho2', 30)->nullable();
            $table->string('CodigoAtalho3', 30)->nullable();
            $table->string('CodigoAtalho4', 30)->nullable();
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
        Schema::connection('pdv')->dropIfExists('atalho');
    }
};
