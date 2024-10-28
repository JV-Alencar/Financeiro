<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    public function index()
    {
        $contas = session()->get('contas', []);
        return view('financeiro.index', compact('contas'));
    }

    public function store(Request $request)
    {

        $contas = session()->get('contas', []);
    
        $contas[] = $request->only(['descricao', 'valor', 'tipo']);
    
        session()->put('contas', $contas);

        return redirect('/financeiro');
    }
}
