<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ObjetivoSalud;
use Illuminate\Support\Facades\Auth;

class ObjetivoSaludController extends Controller
{
    // Obtener objetivo actual del usuario
    public function index()
    {
        $objetivo = ObjetivoSalud::where('user_id', Auth::id())->latest()->first();
        return response()->json($objetivo);
    }

    // Guardar nuevo objetivo de salud
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string',
            'fecha_objetivo' => 'required|date',
            'peso_actual' => 'required|numeric',
            'meta_peso' => 'required|numeric'
        ]);

        $objetivo = ObjetivoSalud::create([
            'user_id' => Auth::id(),
            'descripcion' => $request->descripcion,
            'fecha_objetivo' => $request->fecha_objetivo,
            'peso_actual' => $request->peso_actual,
            'meta_peso' => $request->meta_peso,
            'plan_dieta' => $request->plan_dieta
        ]);

        return response()->json(['mensaje' => 'Objetivo guardado con éxito', 'objetivo' => $objetivo]);
    }

    // Actualizar objetivo existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'meta_peso' => 'required|numeric'
        ]);

        $objetivo = ObjetivoSalud::where('id', $id)->where('user_id', Auth::id())->first();
        if (!$objetivo) {
            return response()->json(['mensaje' => 'Objetivo no encontrado'], 404);
        }

        $objetivo->update(['meta_peso' => $request->meta_peso]);
        return response()->json(['mensaje' => 'Meta actualizada con éxito']);
    }

    // Obtener historial de avances
    public function historial()
    {
        $historial = ObjetivoSalud::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return response()->json($historial);
    }
}