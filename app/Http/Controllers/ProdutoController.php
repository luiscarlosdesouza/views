<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
  private $produtos = [
    ['nome'=>'Agenda','descricao'=>'Agenda Homem Aranha','preco'=>'100.00'],
    ['nome'=>'Caderno','descricao'=>'Caderno 100fl Tilibra','preco'=>'50.00'],
    ['nome'=>'Caneta','descricao'=>'Caneta Bic Preta','preco'=>'5.00'],
    ['nome'=>'Borracha','descricao'=>'Borracha Branca Tilibra','preco'=>'10.00'],
  ];


  public function index()
   {
     $produtos = $this->produtos;
     return view('produtos.index', compact('produtos'));
   }


  public function show($index) {
      $produto = $this->produtos[$index];
      return view('produtos.show', compact('produto'));
    }

}
