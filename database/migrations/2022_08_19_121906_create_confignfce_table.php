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
        Schema::connection('pdv')->create('confignfce', function (Blueprint $table) {
            $table->id('idConfigNFCe');
            $table->integer('Ativo')->default(0);
            $table->string('idToken', 20)->nullable();
            $table->string('Token', 50)->nullable();
            $table->string('PathSchemas', 255)->nullable();
            $table->string('PathArqNFCe', 255)->nullable();
            $table->string('PathCertificado', 255)->nullable();
            $table->string('NumSerieCert', 20)->nullable();
            $table->string('Senha', 30)->nullable();
            $table->integer('Homologacao')->default(1);
            $table->string('UF', 2)->nullable();
            $table->string('UltimaNFCe', 11)->nullable();
            $table->string('Serie', 11)->nullable();
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
        Schema::connection('pdv')->dropIfExists('confignfce');
    }
};
