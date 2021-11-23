<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calypsocotizacion extends Model
{
    use HasFactory;
    protected $table = 'Calypsocotizaciones';
    public $timestamps = false;
    protected $fillable = ['nombre', 'telefono', 'correo', 'fecha', 'lugar', 'mensaje'];
}
