<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        //$pessoas = Pessoa::get();

        return view('cadastro');
    }

    public function store(Request $request){
        $validated = $request ->validate([
            'nome' => 'required | string',
            'sobrenome' => 'required | string',
        ]);

        Pessoa::create($validated);
        // $pessoa = Pessoa::create([
        //     'nome' => $request->nome,
        //     'sobrenome' => $request->sobrenome,
        // ]);

        return view('cadastro');
    }
}
