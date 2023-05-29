@extends('sistema.layout')
@section('title', 'Sistema Pets - editar espécie')
@section('cotent')
    <div class="card border">
        <div class="card-body">
            <form action="/especie/{{$dados->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeEspecie"> Nome da Espécie</label>
                    <input type="text" class="form-control" name="nomeEspecie"
                        id="nomeEspecie" value="{{$dados->nomeEspecie}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button onclick="window.location.href='{{route('indexEspecie')}}';" type="button"
                        class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
