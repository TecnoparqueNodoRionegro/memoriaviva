<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
{
    // Valida los datos del formulario
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    // Crea el nuevo registro
    users::create([
        'email' => $request->input('email'),
        'password' => $request->input('password')
    ]);

    // Redirecciona a la vista de éxito o a la página de inicio
    return redirect()->route('/login')->with('success', 'Registro creado exitosamente.');
}

public function index()
{
    return view ('loginAndUsers.registro');
}
}
