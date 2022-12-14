<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventarios extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id_bodega',
        'id_producto',
        'cantidad',
        'created_by',
        'updated_by'
    ];
}
