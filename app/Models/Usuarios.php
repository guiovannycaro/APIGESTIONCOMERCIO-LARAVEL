<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

      protected $fillable = [
    'id',
  'USU_NOMBRES',
  'USU_DIRECCION' ,
  'USU_TELEFONO' ,
  'USU_CORREO' ,
  'USU_NUMDOCUMENTO' ,
  'USU_PASSWORD' ,
  'USU_TDOC_ID' ,
  'USU_ROL_ID' ,
  'USU_ESTADO' ,
  'created_at',
  'updated_at',
  'email', 'password',
  ];
}