<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $table = 'direccion';
    public $timestamps=false;
    protected $fillable = [
        'provincia_id',
        'localidad',
        'cp',
        'calle',
        'nro',
        'tel',
        // 'upd',
        // 'user',
        'del'
    ];
}
