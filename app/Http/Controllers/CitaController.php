<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function mostrarCitas()
    {
        $citas = Cita::all();
        return view('citas.index', compact('citas'));
    }

    public function crearCita(Request $request)
    {
        Cita::create($request->all());
        return redirect()->route('citas.index');
    }

    public function actualizarCita($id, Request $request)
    {
        $cita = Cita::findOrFail($id);
        $cita->update($request->all());
        return redirect()->route('citas.index');
    }

    public function eliminarCita($id)
    {
        Cita::destroy($id);
        return redirect()->route('citas.index');
    }
}
