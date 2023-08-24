<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $fillable = ['nome', 'cpf', 'foto', 'saldo_geral'];

    public function mesas()
    {
        return $this->belongsToMany(Mesa::class)->withPivot('buyin', 'cashout')->withTimestamps();
    }

    public function entradasBuyin()
    {
        return $this->hasMany(EntradaBuyin::class);
    }
}