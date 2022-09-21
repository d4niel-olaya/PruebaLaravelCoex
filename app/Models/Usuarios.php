<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuarios extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'foto',
        'estado',
        'created_by',
        'updated_by'
    ];
}
