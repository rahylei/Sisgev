<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'codigo',
        'descripcion',
        'almacen',
        'status',
    ];
}
