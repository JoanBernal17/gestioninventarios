<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venta;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = 'codigo';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'cantidad',
        'precio'
    ];

    // Relación con ventas
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'producto_codigo', 'codigo');
    }

    /**
     * Verifica si el producto tiene ventas asociadas
     */
    public function tieneVentas()
    {
        return $this->ventas()->exists();
    }
}
