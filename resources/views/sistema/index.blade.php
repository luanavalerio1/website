@extends('sistema.layout')
@section('title', 'Página Inicial - Sistema Pets')
@section('cotent')
<div class="jumbotron">
    <p class="h3 text-center py-4">Cadastro de Pets</p>
</div>
<div class="row">
    <div class="col-md-6 col-sn-4 imgCapa">
        <a href="#" class="img-thumbnail">
            <img src="{{asset('storage/imagens/capa.jpeg)}}" />
        </a>
    </div>
    <div class="col-md-6 col-sn-8 ">
        <p class="texto">
            <h4>Este sistema ajudará você a organizar seus pets, permitindo cadastrá-los e editá-los de forma rápida,]
                facilitando seu controle diário.</h4>
        </p>
    </div>
</div>
@endsection