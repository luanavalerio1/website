@extends('sistema.layout')
@section('title', 'Sistema Pets - nova espécie')
@section('cotent')
    <div class="card border">
        <div class="card-body">
            <form action="{{route('gravandoNovaEspecie')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeEspecie"> Nome da Espécie</label>
                    <input type="text" class="form-control" name="nomeEspecie"
                        id="nomeEspecie" placeholder="Informe o nome da espécie">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button onclick="window.location.href='{{route('indexEspecie')}}';" type="button"
                        class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
