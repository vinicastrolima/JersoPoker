<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntradasBuyinTable extends Migration
{
    public function up()
    {
        Schema::create('entradas_buyin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jogador_id')->constrained('jogadores');
            $table->decimal('valor_adicionado', 10, 2);
            $table->foreignId('mesa_id')->constrained('mesas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entradas_buyin');
    }
}





