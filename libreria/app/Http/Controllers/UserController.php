<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function showPrestamos($id) {
        $user = User::find($id);
        $prestamos = $user->prestamos;

        return view('usuarios.prestamos', ['user' => $user, 'prestamos' => $prestamos]);
    }

    public function verPrestamos() {
        $user = auth()->user();
        $prestamos = $user->prestamos;

        return view('usuarios.prestamos', ['user' => $user, 'prestamos' => $prestamos]);
    }

    public function registrar(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crea el usuario en la base de datos
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Autentica al usuario
        auth()->login($user);

        // Redirige a una página de bienvenida o a donde lo necesites
        return redirect('/dashboard');
    }



}
