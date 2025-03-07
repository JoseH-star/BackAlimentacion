<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformacionFrutas;

class InformacionFrutasController extends Controller
{
    public function index()
    {
        return response()->json(InformacionFrutas::all());
    }
}
