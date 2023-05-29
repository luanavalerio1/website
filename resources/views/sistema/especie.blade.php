@extends('sistema.layout')
@section('title', 'Sistema Pets - Espécie')
@section('cotent')
    <div class="card border">
        @if(session()->get('danger'))
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div><br />
        @elseif(session()->get('success'))
            <div class="alert alert-success">
                {{ session ()->get('success') }}
            </div><br />
        @endif
        <div class="card-body">
            <h5 class="card-title" style="text-align: center"> Cadastro de Espécie</h5>
                <table class="table table-ordered table-hover" id="tabelaEspecie">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Nome da Espécie </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($especie as $item )
                        <tr>
                            <td>{{ $item->id}}</td>
                            <td>{{$item->nomeEspecie}}</td>
                            <td style="text-align:center">
                                <a href="/especie/editar/{{$item->id}}" class="btn btn-primary">Editar</a>
                            </td>
                            <td style="text-align:center">
                                <a href="/especie/apagar/{{$item->item}}" class="btn btn-danger">Deletar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
        <div class="card-footer">
            <a href="/especie/novo" class="btn btm-primary btn-sm" role="button"> Nova Espécie</a>
        </div>
    </div>
@endsection


