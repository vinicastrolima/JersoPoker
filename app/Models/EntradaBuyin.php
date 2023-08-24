<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EntradaBuyin extends Model
{
    protected $fillable = ['jogador_id', 'valor_adicionado', 'mesa_id'];

    public function jogador()
    {
        return $this->belongsTo(Jogador::class);
    }

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }
}
