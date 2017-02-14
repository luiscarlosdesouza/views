<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditoraController extends Controller
{
  public function index()
   {
     $editoras = array(
      'OReilly', 'Manning',
      'APress', 'Cambridge'
    );
    return view('editoras.index', compact('editoras'));

    }
  public function show($index) {
      $curso = $this->editoras[$index];
      return view('editoras.show', compact('editora'));
    }



}
