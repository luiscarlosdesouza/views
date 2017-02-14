<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditoraController extends Controller
{
  private $editoras = array(
    'OReilly', 'Manning',
    'APress', 'Cambridge'
  );


  public function index()
   {
     $editoras = $this->editoras;
     return view('editoras.index', compact('editoras'));
   }


  public function show($index) {
      $editora = $this->editoras[$index];
      return view('editoras.show', compact('editora'));
    }

}
