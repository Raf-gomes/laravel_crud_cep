<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriaTabelaEnderecos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table){
            $table->id();
            $table->string( column: 'cep');
            $table->string( column: 'logradouro');
            $table->string( column: 'numero');
            $table->string( column: 'bairro');
            $table->string( column: 'cidade');
            $table->string( column: 'estado');
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
        Schema::dropIfExists(table: 'enderecos');
    }
}
