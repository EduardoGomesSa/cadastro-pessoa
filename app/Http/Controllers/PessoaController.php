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

    public function store(){

        dd('oiii');
        // $pessoa = Pessoa::create([
        //     'nome' => 'João',
        //     'sobrenome' => 'Corinthians',
        // ]);

        //return redirect('index');
    }
}
