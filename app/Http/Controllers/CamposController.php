<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Campos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CamposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campos = Campos::all();
        return view('campo.index', ['campos' => $campos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $campos = DB::table('campos')
            ->orderBy('nombre')
            ->get();
        return view('campo.new', ['campos' => $campos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $campo = new Campos();
        $campo->nombre = $request->nombre;
        $campo->ubicacion = $request->ubicacion;
        $campo->numero_hoyos = $request->numero_hoyos;
        $campo->tipo = $request->tipo;
        $campo->tarifa = $request->tarifa;
        $campo->created_at = date("Y-m-d H:i:s");
        $campo->updated_at = date("Y-m-d H:i:s");
        $campo->save();

        $campos = Campos::all();
        return view('campo.index', ['campos' => $campos]);
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
        $campo = Campos::find($id);

        $campos = DB::table('campos')
            ->orderBy('nombre')
            ->get();
        return view('campo.edit', ['campo' => $campo, 'campos' => $campos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $campo = Campos::find($id);
        $campo->nombre = $request->nombre;
        $campo->ubicacion = $request->ubicacion;
        $campo->numero_hoyos = $request->numero_hoyos;
        $campo->tipo = $request->tipo;
        $campo->tarifa = $request->tarifa;
        $campo->updated_at = date("Y-m-d H:i:s");
        $campo->save();

        $campos = Campos::all();
        return view('campo.index', ['campos' => $campos]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $campos = Campos::find($id);
        $campos->delete();

        $campos = Campos::all();
        return view('campo.index', ['campos' => $campos]);
    }
}
