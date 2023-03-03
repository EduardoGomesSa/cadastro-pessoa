<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        $pessoas = Pessoa::get();

        dd($pessoas);
        return 'Ola Mundo! Vai Corinthians!!!!';
    }

    public function store(Request $request){
        $pessoa = Pessoa::create([
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
        ]);

        redirect(view('cadastro'));
    }
}
