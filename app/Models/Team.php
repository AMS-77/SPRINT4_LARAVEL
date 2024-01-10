<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Relación 1:n con partidos como local
    public function localGames()
    {
        return $this->hasMany(Game::class, 'local', 'id');
    }

    // Relación 1:n con partidos como visitante
    public function visitingGames()
    {
        return $this->hasMany(Game::class, 'visitante', 'id');
    }    
    
}

?>