<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function mostrarServicios()
    {
        $servicios = Servicio::all();
        return view('servicios.index', compact('servicios'));
    }

    public function crearServicio(Request $request)
    {
        Servicio::create($request->all());
        return redirect()->route('servicios.index');
    }

    public function actualizarServicio($id, Request $request)
    {
        $servicio = Servicio::findOrFail($id);
        $servicio->update($request->all());
        return redirect()->route('servicios.index');
    }

    public function eliminarServicio($id)
    {
        Servicio::destroy($id);
        return redirect()->route('servicios.index');
    }
}
