<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = team::all();
        return view('teams.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|max:255',
            'ciudad'=>'required|max:255',
            'camiseta'=>'required|max:255'
        ]);

        $team = new Team();
        $team->nombre = $request->input('nombre');
        $team->ciudad = $request->input('ciudad');
        $team->camiseta = $request->input('camiseta');
        $team->save();

        return view("message", ['msg' => "Equipo dado de alta correctamente"]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('teams.edit', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'=>'required|max:255',
            'ciudad'=>'required|max:255',
            'camiseta'=>'required|max:255'
        ]);

        $team = Team::find($id);
        $team->nombre = $request->input('nombre');
        $team->ciudad = $request->input('ciudad');
        $team->camiseta = $request->input('camiseta');
        $team->save();
        return view("message", ['msg' => "Registro actualizado correctamente"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return view("message", ['msg' => "Registro eliminado correctamente"]);
    }
}
