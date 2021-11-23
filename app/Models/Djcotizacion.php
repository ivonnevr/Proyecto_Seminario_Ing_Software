<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Djcotizacion extends Model
{
    use HasFactory;
    protected $table = 'Djcotizaciones';
    public $timestamps = false;
    protected $fillable = ['nombre', 'telefono', 'correo', 'fecha', 'paquete', 'lugar', 'mensaje'];
}
