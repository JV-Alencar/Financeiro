<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = session()->get('usuarios', []);
        return view('usuarios.index', compact('usuarios'));
    }

    public function store(Request $request)
    {

        $usuarios = session()->get('usuarios', []);

        $usuarios[] = $request->only(['nome', 'cargo', 'escolaridade']);
        
        session()->put('usuarios', $usuarios);

        return redirect('/usuarios');
    }
}
