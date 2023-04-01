<?php
$flag_msg = null;
$msg = "";

$qtd_letras = 0;
$qtd_palavras = 0;

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $frase = $_GET["frase"];
    $palavra = $_GET["palavra"];
    $flag_msg = true;
    if (!empty($frase) && !empty($palavra))
    {
      $pos = strripos($frase, $palavra);
      if ($pos === false) 
      {
        $flag_msg = false;
        $msg .= "Sinto muito, nós não encontramos ($palavra) em ($frase)<br>";
      } 
      else 
      {
        $flag_msg = true;
        $tam_palavra = mb_strlen($palavra) - 1;
        $pos_inicio = $pos + $tam_palavra;
        $msg .= "Parabéns!\n";
        $msg .= "Nós encontramos a  palavra [$palavra] em [$frase].<br>";
        $msg .= "Posição do início ($pos)<br>";
        $msg .= "Posição do final ($pos_inicio)<br>";
      }
      $msg .= "Quantidade de letras = {$$qtd_letras}<br>";
      $msg .= "Quantidade de palavras = {$qtd_palavras}<br>";
    }
    else
    {
        $flag_msg = false;
        $msg = "Dado incorreto, preencha o formulário corretamente!";
    }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício PHP 07</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Busca de caracteres</h1>
      <hr class="my-3">
      <p class="lead">Crie um programa que a partir de um texto e uma palavra, fornecidos pelo usuário, realize uma busca no texto e exiba a posição inicial e final da palavra no texto. Exiba também a quantidade de letras e palavras contidas no texto. Por fim, crie um array para armazenar as letras que aparecem no texto e a quantidade de vezes que cada uma aparece.</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
    <div class="form-group col-md-9">
        <label class="centro" for="n">Digite uma frase:</label>
        <input type="text" class="form-control" id="frase" name="frase" required>
      </div>
      <br>
      <div class="form-group col-md-3">
        <label class="centro" for="n">Digite a palavra a ser procurada:</label>
        <input type="text" class="form-control" id="palavra" name="palavra" required>
      </div>
      <br>
      <button type="submit" class="btn btn-success mb-2" name="enviar">Exibir a posição inicial e final da palavra no texto a quantidade de letras e palavras contidas no texto.</button><br><br>
      <a  href="../index.html"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
    </form>
    <?php 
      if (!is_null($flag_msg)) {
        if ($flag_msg) {
          echo "<div class='alert alert-primary' role='alert'>$msg</div><br>"; 
        }
      else
      {
        echo "<div class='alert alert-warning' role='alert'>$msg</div><br>"; 
      }
      }
    ?>
  </div>
</div>
</body>
</html>