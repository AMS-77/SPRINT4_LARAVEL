<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Relationship 1:n with local games 
    public function localGames()
    {
        return $this->hasMany(Game::class, 'local', 'id');
    }

    // Relationship 1:n with visiting games
    public function visitingGames()
    {
        return $this->hasMany(Game::class, 'visitante', 'id');
    }    
    
}

?>