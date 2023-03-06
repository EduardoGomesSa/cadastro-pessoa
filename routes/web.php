<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cadastro', function(){
    return view('cadastro');
})->name('cadastro');

Route::get('/pessoas', [PessoaController::class, 'index'])->name('pessoas.index');
Route::post('/pessoas', [PessoaController::class, 'store'])->name('pessoas.store');
Route::put('/pessoas', [PessoaController::class, 'update'])->name('pessoas.update');
