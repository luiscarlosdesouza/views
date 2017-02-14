
@extends('layout')

@section('title' , 'Pagina de Cursos')

@section('content')

      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <h1>Produtos</h1>

          <ul class="list-group">
            @foreach ($produtos as $produto)
              <li class="list-group-item"><a href="/produtos/{{ $loop->index }}">{{ $produto['nome'] }}</a></li>
            @endforeach
          </ul>

        </div>
      </div>
     @endsection
