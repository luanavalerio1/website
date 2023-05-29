<?php

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
    return view('sistema.index');
});

Auth::routes();

Route::get('/home', function (){
    return view('sistema.index');
});

Route::get('/especie', [App\Http\Controllers\controladorEspecie::class, 'index'])->name('indexEspecie');
Route::get('/especie/nova', [App\Http\Controllers\controladorEspecie::class, 'create'])->name('novaEspecie');
Route::get('/especie', [App\Http\Controllers\controladorEspecie::class, 'store'])->name('gravaNovaEspecie');
Route::get('/especie/apagar/{id}', [App\Http\Controllers\controladorEspecie::class, 'destroy'])->name('deletaEspecie');
Route::get('/especie/editar/{id}', [App\Http\Controllers\controladorEspecie::class, 'edit'])->name('editaEspecie');
Route::get('/especie/{id}', [App\Http\Controllers\controladorEspecie::class, 'update'])->name('atualizaEspecie');
Route::get('/especie/pesquisa', [App\Http\Controllers\controladorEspecie::class, 'pesquisarTipo'])->name('pesquisarEspecie');
Route::get('/especie/procurarTipo', [App\Http\Controllers\controladorEspecie::class, 'procurarTipo'])->name('procurarEspecie');
