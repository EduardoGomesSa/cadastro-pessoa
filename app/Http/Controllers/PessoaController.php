<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        $pessoas = Pessoa::all();

        return view('cadastro', [
            'pessoas' => $pessoas,
        ]);
    }

    public function store(Request $request){
        $validated = $request ->validate([
            'nome' => 'required | string',
            'sobrenome' => 'required | string',
            'email' => 'required | email:rfc,dns',
            'data_nascimento' => 'required | date',
        ]);

        Pessoa::create($validated);


        return redirect()->route('pessoas.index');
    }

    public function update(Request $request, $id){
        Pessoa::find($id)->update([
            'nome'=>$request->nome,
            'sobrenome'=>$request->sobrenome,
            'email'=>$request->email,
            'data_nascimento'=>$request->data_nascimento]);

        return redirect()->route('pessoas.index');
    }

    public function delete($id){
        Pessoa::find($id)->delete();

        return redirect()->route('pessoas.index');
    }
}
