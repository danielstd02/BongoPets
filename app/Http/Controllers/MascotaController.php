<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function mostrarMascotas()
    {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    public function crearMascota(Request $request)
    {
        Mascota::create($request->all());
        return redirect()->route('mascotas.index');
    }

    public function actualizarMascota($id, Request $request)
    {
        $mascota = Mascota::findOrFail($id);
        $mascota->update($request->all());
        return redirect()->route('mascotas.index');
    }

    public function eliminarMascota($id)
    {
        Mascota::destroy($id);
        return redirect()->route('mascotas.index');
    }
}
