<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class CursosController extends Controller
{
  public function index()
   {
     $cursos = array(
      'Lógica de programação', 'Desenvolvimento Web com PHP',
      'Algoritmos e estrutura de dados', 'Test Driven Development'
    );
    return view('cursos.index', compact('cursos'));






    }
  public function show($index) {
      $curso = $this->cursos[$index];
    //  $curso = $cursos[$index];
      return view('cursos.show', compact('curso'));
    }



}
