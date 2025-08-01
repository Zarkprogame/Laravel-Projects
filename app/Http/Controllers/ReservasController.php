<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = DB::table('reservas')
            ->join('campos', 'reservas.campo_id', '=', 'campos.id')
            ->join('jugadores', 'reservas.jugador_id', '=', 'jugadores.id')
            ->select('reservas.*', 'campos.nombre as campo_nombre', 'jugadores.nombre as jugador_nombre')
            ->get();
        return view('reserva.index', ['reservas' => $reservas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $campos = DB::table('campos')
            ->orderBy('nombre')
            ->get();

        $jugadores = DB::table('jugadores')
            ->orderBy('nombre')
            ->get();

        return view('reserva.new', ['campos' => $campos, 'jugadores' => $jugadores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reserva = new Reservas();
        $reserva->campo_id = $request->campo_id;
        $reserva->jugador_id = $request->jugador_id;
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->hora_inicio = $request->hora_inicio;
        $reserva->duracion = $request->duracion;
        $reserva->numero_jugadores = $request->numero_jugadores;
        $reserva->created_at = date("Y-m-d H:i:s");
        $reserva->updated_at = date("Y-m-d H:i:s");
        $reserva->save();

        $reservas = DB::table('reservas')
            ->join('campos', 'reservas.campo_id', '=', 'campos.id')
            ->join('jugadores', 'reservas.jugador_id', '=', 'jugadores.id')
            ->select('reservas.*', 'campos.nombre as campo_nombre', 'jugadores.nombre as jugador_nombre')
            ->get();
        return view('reserva.index', ['reservas' => $reservas]);
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
        $reserva = Reservas::find($id);

        $campos = DB::table('campos')
            ->orderBy('nombre')
            ->get();

        $jugadores = DB::table('jugadores')
            ->orderBy('nombre')
            ->get();

        return view('reserva.edit', ['reserva' => $reserva, 'campos' => $campos, 'jugadores' => $jugadores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reserva = Reservas::find($id);

        $reserva->campo_id = $request->campo_id;
        $reserva->jugador_id = $request->jugador_id;
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->hora_inicio = $request->hora_inicio;
        $reserva->duracion = $request->duracion;
        $reserva->numero_jugadores = $request->numero_jugadores;
        $reserva->updated_at = date("Y-m-d H:i:s");
        $reserva->save();

        $reservas = DB::table('reservas')
            ->join('campos', 'reservas.campo_id', '=', 'campos.id')
            ->join('jugadores', 'reservas.jugador_id', '=', 'jugadores.id')
            ->select('reservas.*', 'campos.nombre as campo_nombre', 'jugadores.nombre as jugador_nombre')
            ->get();
        return view('reserva.index', ['reservas' => $reservas]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reserva = Reservas::find($id);
        $reserva->delete();

        $reservas = DB::table('reservas')
            ->join('campos', 'reservas.campo_id', '=', 'campos.id')
            ->join('jugadores', 'reservas.jugador_id', '=', 'jugadores.id')
            ->select('reservas.*', 'campos.nombre as campo_nombre', 'jugadores.nombre as jugador_nombre')
            ->get();
        return view('reserva.index', ['reservas' => $reservas]);
    }
}
