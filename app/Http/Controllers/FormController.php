<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Muestra el formulario
    public function create()
    {
        return view('formulario');
    }

    // Recibe los datos enviados
    public function store(Request $request)
    {
        // Aquí puedes guardar en BD, pero por ahora solo recibimos
        $nombre = $request->input('nombre');
        $correo = $request->input('correo');

        return "Nombre: $nombre, Correo: $correo";
    }
}
