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
        Schema::connection('pdv')->create('configswservices', function (Blueprint $table) {
            $table->id('idConfigSWServices');
            $table->string('HostSWServices', 100)->nullable();
            $table->integer('flgAutomacao')->nullable();
            $table->integer('flgComandas')->default(0);
            $table->integer('ilha')->nullable();
            $table->integer('flgSAT')->default(0);
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
        Schema::connection('pdv')->dropIfExists('configswservices');
    }
};
