<?php

namespace App\Http\Controllers;
use App\Models\Team;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //We need the teams to appear in the Select of the form for the Local and Visitor fields.
        $teams = team::all(); 
        return view('games.create', ['teams' => $teams]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_hora' => 'required|date|date_format:Y-m-d\TH:i',
            'local' => 'required|exists:teams,nombre|different:visitante',
            'visitante' => 'required|exists:teams,nombre|different:local',
            'n_goles_local' => 'nullable|integer|min:0',
            'n_goles_visitante' => 'nullable|integer|min:0'
        ]);

        $game = new Game();
        $game->fecha_hora = $request->input('fecha_hora');
        $game->local = $request->input('local');
        $game->visitante = $request->input('visitante');
        $game->n_goles_local = $request->input('n_goles_local');
        $game->n_goles_visitante = $request->input('n_goles_visitante');
        $game->save();

        return view("message", ['msg' => "Partido dado de alta correctamente"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //It has no use in this App
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $game = Game::find($id);
        $teams = Team::all();

        // Formats the date to the expected format and can pass validation (Y-m-d\TH:i)
        $game->fecha_hora = date('Y-m-d\TH:i', strtotime($game->fecha_hora));

        return view('games.edit', ['game' => $game, 'teams' => $teams]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha_hora' => 'required|date|date_format:Y-m-d\TH:i',
            'local' => 'required|exists:teams,nombre|different:visitante',
            'visitante' => 'required|exists:teams,nombre|different:local',
            'n_goles_local' => 'nullable|integer|min:0',
            'n_goles_visitante' => 'nullable|integer|min:0'
        ]);

        $game = Game::find($id);
        $game->fecha_hora = $request->input('fecha_hora');
        $game->local = $request->input('local');
        $game->visitante = $request->input('visitante');
        $game->n_goles_local = $request->input('n_goles_local');
        $game->n_goles_visitante = $request->input('n_goles_visitante');
        $game->save();

        return view("message", ['msg' => "Partido actualizado correctamente"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();
        
        return view("message", ['msg' => "Partido eliminado correctamente"]);
    }
}
