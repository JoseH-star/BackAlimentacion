<?php

namespace App\Http\Controllers;

use App\Models\InformacionFruta;
use Illuminate\Http\Request;

class InformacionFrutaController extends Controller
{
    public function index(Request $request)
    {
        $query = InformacionFruta::query();
        
        if ($request->has('search')) {
            $query->where('fruta', 'like', '%'.$request->search.'%');
        }

        return $query->get();
    }

    public function show($id)
    {
        return InformacionFruta::findOrFail($id);
    }
}