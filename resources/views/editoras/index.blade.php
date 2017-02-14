@extends('layout')

@section('title' , 'Pagina de Cursos')

@section('content')


      <div class="row">
        <div class="col-md-6 col-md-offset-3">

          <h1>Editoras</h1>

          <ul class="list-group">
            @foreach ($editoras as $editora)
              <li class="list-group-item"><a href="/editoras/{{ $loop->index }}">{{ $editora }}</a></li>
            @endforeach
          </ul>

        </div>
      </div>
     @endsection
