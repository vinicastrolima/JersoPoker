<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogadorMesaTable extends Migration
{
    public function up()
    {
        Schema::create('jogador_mesa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jogador_id')->constrained('jogadores');
            $table->foreignId('mesa_id')->constrained('mesas');
            $table->decimal('buyin', 10, 2);
            $table->decimal('cashout', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jogador_mesa');
    }
}