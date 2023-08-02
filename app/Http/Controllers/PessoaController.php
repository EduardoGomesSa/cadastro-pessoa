<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        $pessoas = Pessoa::all();

        return view('cadastro', [
            'pessoas' => $pessoas,
        ]);

        return view('cadastro', compact('pessoas'));
    }

    public function store(PessoaRequest $request){
        Pessoa::create($request->all());

        return redirect()->route('pessoas.index');
    }

    public function update(PessoaRequest $request, $id){
        Pessoa::find($id)->update($request->all());

        return redirect()->route('pessoas.index');
    }

    public function destroy($id){
        Pessoa::find($id)->delete();

        return redirect()->route('pessoas.index');
    }
}
