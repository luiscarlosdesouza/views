<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Produtos</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>
  <body>
    <div class="container">
  <h1>Produtos</h1>
      <div class="row">
          <div class="col-md-12 col-md-offset-0">
            <h2>Produto: {{ $produto['nome'] }} - Descrição: {{ $produto['descricao'] }} - R$ {{ $produto['preco'] }}</h2>
          </div>
      </div>
    </div>



    <script type="text/javascript" src="/js/app.js">
  </body>
</html>
