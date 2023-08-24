<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesasTable extends Migration
{
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_da_edicao');
            $table->dateTime('horario_inicio');
            $table->dateTime('horario_fim')->nullable();
            $table->decimal('saldo_geral', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mesas');
    }
}
