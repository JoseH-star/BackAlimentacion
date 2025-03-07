<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestBienestar extends Model
{
    use HasFactory;

    protected $table = 'test_bienestar'; // Nombre de la tabla

    protected $fillable = [
        'peso',
        'altura',
        'edad',
        'sexo',
        'complexion',
        'actividad',
        'suenio',
        'estres',
        'objetivo',
    ];
}
