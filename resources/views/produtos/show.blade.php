
@extends('layout')
@section('title' , 'Mostra detalhes do Curso')
@section('content')

  <h1>Produtos</h1>
      <div class="row">
          <div class="col-md-12 col-md-offset-0">
            <h2>Produto: {{ $produto['nome'] }} - Descrição: {{ $produto['descricao'] }} - R$ {{ $produto['preco'] }}</h2>
          </div>
      </div>
     @endsection
