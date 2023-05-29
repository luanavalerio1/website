<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;
use App\Models\Pets;
use Illuminate\Support\Facades\DB;




class controladorEspecie extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this ->middleware('auth');
    }

    public function index()
    {
        $especie = Especie::all();
        return view('sistema.especie', compact('especie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('sistema.novaEspecie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $dados = new Especie();
    $dados->nomeEspecie = $request->input('nomeEspecie');
    $dados->save();
    return redirect('/especie')->with('success', 'Nova espécie cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Especie::find($id);
        if(isset($dados)){
            return view('sistema.editarEspecie', compact('dados'));
        }
        return redirect('/especie')->with('danger', "Espécie não encontrada.");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Especie::find($id);
        if(isset($dados)){
            $dados->nomeEspecie = $request->input('nomeEspecie');
            $dados->save();
        }else{
            return redirect('/especie')->with('danger', 'Erro ao tentar atualizae o cadastro do Pet');
        }
        return redirect('/especie')->with('success', 'Cadastro atualizado com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Especie::find($id);
        if(isset($dados)){
            $pet = Pet::where('especie', '=', $id)->first();
            if(!isset($pet)){
                $dados->delete();Na exibição de dados, quando se tem muitos registros a serem apresentados, deve-se utilizar a
                paginação, que nada mais é do que limitar a quantidade de dados que serão exibidos por vez, deixando
                a interface do usuário mais ”limpa” e evitando possíveis travamentos no envio de uma quantidade excessiva de dados.
                O Laravel trás uma estrutura pronta para paginação, que é bem simples de implementar, basta que
                no seu controller você use o método paginate() do Model e retorne para View, então na sua View você
                utiliza o método links()para renderizar a paginação
            }else{
                return redirect('/especie')->with('danger', 'Erro ao tentar excluir a espécie.');
            }
        }else{
            return redirect('/especie')->with('danger', 'Espécie não cadastrada.');
        }
        return redirect('/especie')->with('success', 'Cadastro excluído com sucesso.');
    }
    public function pesquisarEspecie()
    {
        return view('sistema.pesquisarEspecie');
    }
    public function procurarEspecie(Request $request)
    {
        $descricao = $request->input('descricaoEspecie')
        $especie = DB::table('especie')->select('id', 'nomeEspecie')
                 ->where(DB::raw('lower(descricaoEspecie)'), 'like', '%'.strtolower(%descricao).'%')->aget();
        if(isset($especie))
            return view('sistema.especie', compact('especie'));
        else
        return redirect('/especie')->with('danger', 'Não foram encontrados registros com o termo pesquisado.')

    }

}
