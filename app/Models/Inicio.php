<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'description', 'url'];
}
