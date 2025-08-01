<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jugadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JugadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadores = Jugadores::all();
        return view('jugador.index', ['jugadores' => $jugadores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jugadores = DB::table('jugadores')
            ->orderBy('nombre')
            ->get();
        return view('jugador.new', ['jugadores' => $jugadores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jugador = new Jugadores();
        $jugador->nombre = $request->nombre;
        $jugador->apellido = $request->apellido;
        $jugador->telefono = $request->telefono;
        $jugador->email = $request->email;
        $jugador->direccion = $request->direccion;
        $jugador->handicap = $request->handicap;
        $jugador->created_at = date("Y-m-d H:i:s");
        $jugador->updated_at = date("Y-m-d H:i:s");
        $jugador->save();

        $jugadores = Jugadores::all();
        return view('jugador.index', ['jugadores' => $jugadores]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jugador = Jugadores::find($id);

        $jugadores = DB::table('jugadores')
            ->orderBy('nombre')
            ->get();
        return view('jugador.edit', ['jugador' => $jugador, 'jugadores' => $jugadores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jugador = Jugadores::find($id);
        $jugador->nombre = $request->nombre;
        $jugador->apellido = $request->apellido;
        $jugador->telefono = $request->telefono;
        $jugador->email = $request->email;
        $jugador->direccion = $request->direccion;
        $jugador->handicap = $request->handicap;
        $jugador->updated_at = date("Y-m-d H:i:s");
        $jugador->save();

        $jugadores = Jugadores::all();
        return view('jugador.index', ['jugadores' => $jugadores]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jugador = Jugadores::find($id);
        $jugador->delete();

        $jugadores = Jugadores::all();
        return view('jugador.index', ['jugadores' => $jugadores]);
    }
}
