<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Game extends Model
{
    //Relationship n:1 of local team
    public function localTeam()
    {
        return $this->belongsTo(Team::class, 'local', 'nombre');
    }

    //Relationship n:1 of visiting team
    public function visitingTeam()
    {
        return $this->belongsTo(Team::class, 'visitante', 'nombre');
    }
    
}

?>