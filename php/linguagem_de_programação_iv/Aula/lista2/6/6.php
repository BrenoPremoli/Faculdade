<?php
$flag_msg = null;
$msg = "";

$maior = 0;
$menor = 0;
$soma = 0;
$media = 0;

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $n = $_GET["n"];
    if (!empty($n) && ($n > 0) && is_numeric($n))
    {
        for ($x = 0; $x < $n; $x++)
        {
          $array[] = rand(1, 100);
          if ($x == 0)
          {
            $menor = $array[$x];
            $maior = $array[$x];
          }
          else
          {
            if ($array[$x] > $maior)
            {
              $maior = $array[$x];
            }
            if ($array[$x] < $menor)
            {
              $menor = $array[$x];
            }
          }
        }
        foreach($array as $valor => $numero)
        {
          $flag_msg = true;
          $msg .= " [{$valor}] = {$numero}  <br>";
          $soma= $soma + $numero;
        }
      $media = $soma / $n;
      $msg .= "Soma dos elementos = {$soma}<br>";
      $msg .= "Média dos elementos = {$media}<br>";
      $msg .= "Menor elemento = {$menor}<br>";
      $msg .= "Maior elemento = {$maior}<br>";
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
  <title>Exercício PHP 06</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Soma dos elementos do array, a média, o menor e o maior elemento e a suas posições</h1>
      <hr class="my-3">
      <p class="lead">Criar um array com um número x de número inteiros (fornecido pelo usuário), exibir a soma dos elementos do array, a média dos elementos, o menor e o maior elemento e a suas respectivas posições do array. </p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
    <div class="form-group col-md-4">
        <label class="centro" for="n">Digite o número de elementos do array:</label>
        <input type="text" class="form-control" id="n" name="n" required>
      </div>
      <br>
      <button type="submit" class="btn btn-success mb-2" name="enviar">Exibir soma dos elementos do array, a média dos elementos, o menor e o maior elemento e a suas respectivas posiçõe</button><br><br>
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