<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionFrutas extends Model
{
    use HasFactory;
    protected $fillable = ['image_url', 'title', 'desciption', 'clasificacion', 'Peso_Promedio', 'Color', 'Usos_Comunes'];
}
