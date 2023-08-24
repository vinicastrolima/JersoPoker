<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['nome_da_edicao', 'horario_inicio', 'horario_fim', 'rake'];

    public function jogadores()
    {
        return $this->belongsToMany(Jogador::class)->withPivot('buyin', 'cashout')->withTimestamps();
    }

    public function entradasBuyin()
    {
        return $this->hasMany(EntradaBuyin::class);
    }
}
