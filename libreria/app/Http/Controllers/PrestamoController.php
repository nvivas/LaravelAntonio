<?php

namespace App\Http\Controllers;
// namespace App\Models;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Prestamo;
use Illuminate\Support\Facades\Auth;

class PrestamoController extends Controller {


    public function crear(Request $request)
    {
        $prestamo = new Prestamo();
        $prestamo->user_id = Auth::id();
        $prestamo->save();

        return redirect('/prestamos')->with('success', 'Préstamo creado exitosamente.');
    }

    public function finalizar($id)
    {
        $prestamo = Prestamo::findOrFail($id);

        if ($prestamo->user_id !== Auth::id()) {
            return redirect('/prestamos')->with('error', 'No tienes permiso para finalizar este préstamo.');
        }

        return redirect('/prestamos')->with('success', 'Préstamo finalizado exitosamente.');
    }



}
