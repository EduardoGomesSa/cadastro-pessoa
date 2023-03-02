<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        return 'Ola Mundo! Vai Corinthians!!!!';
    }

    public function store(){
        $pessoa = Pessoa::create([
            'nome' => 'Thayná',
            'sobrenome' => 'Bezerra',
        ]);

        //return redirect('index');
    }
}
