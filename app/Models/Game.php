<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
     //Relación n:1 siendo el equipo local
    public function localTeam()
    {
        return $this->belongsTo(Team::class, 'local_id' , 'id');
    }

    //Relación n:1 siendo el equipo visitante
    public function visitingTeam()
    {
        return $this->belongsTo(Team::class, 'visitante_id', 'id');
    }
    
}

?>