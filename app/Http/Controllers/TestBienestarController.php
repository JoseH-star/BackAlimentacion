<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestBienestar;

class TestBienestarController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'peso' => 'required|integer',
            'altura' => 'required|integer',
            'edad' => 'required|integer',
            'sexo' => 'required|string',
            'complexion' => 'required|string',
            'actividad' => 'required|string',
            'suenio' => 'required|string',
            'estres' => 'required|string',
            'objetivo' => 'required|string',
        ]);

        $test = TestBienestar::create($request->all());

        return response()->json(['message' => 'Test guardado con éxito', 'data' => $test], 201);
    }
}