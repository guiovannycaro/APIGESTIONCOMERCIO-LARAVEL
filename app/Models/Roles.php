<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

       protected $fillable = [
        'id',
        'rol_nombre',
        'rol_descripcion',
        'created_at',
        'updated_at'
    ];
}