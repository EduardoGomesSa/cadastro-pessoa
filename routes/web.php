<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/cadastro', function(){
//     return view('cadastro');
// })->name('cadastro');

Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');
Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas.store');
Route::put('/pessoas/{id}', [PessoaController::class, 'update'])->name('pessoas.update');
Route::delete('/pessoas/{id}', [PessoaController::class, 'destroy'])->name('pessoas.destroy');
Route::get('/atualizacao/{id}', function(){
    return view('atualizacao');
})->name('atualizacao');
