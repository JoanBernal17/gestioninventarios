<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';
    public $incrementing = true; // Si tu tabla tiene id autoincremental
    protected $keyType = 'int';

    protected $fillable = [
        'producto_codigo',
        'cantidad',
        'precio_unitario',
        'total',
    ];

    // Relación inversa
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_codigo', 'codigo');
    }
}
