<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar']))
{ // isset verifica se a variável foi iniciada
  $n = 25;
  $x1 =1;
  $x2 = 0;
  for ($n = 25; $n >= 1; $n--)
  {
    $x3 = $x1 + $x2;
    $flag_msg = true;
    $msg .= "{$x1} + {$x2} = {$x3}<br>";
    $x1 = $x2;
    $x2 = $x3;
  }
}
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    form {
      text-align: center;
    }
  </style>
  <title>Exercício PHP 03</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Fibonacci</h1>
      <hr class="my-3">
      <p class="lead">Escreva um programa que apresente a série de Fibonacci até o vigésimo quinto termo. A série de Fibonacci é formada pela sequência: 1, 1, 2, 3, 5, 8, 13, 21, 34, ... . Esta série se caracteriza pela soma de um termo atual com o seu anterior subsequente, para que seja formado o próximo valor da sequência. (utilize for)</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <button type="submit" class="btn btn-success mb-5" name="enviar">Apresentar a série de Fibonacci até o vigésimo quinto termo</button><br>
      <a  href="../index.html"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
    </form>
    <?php 
      if (!is_null($flag_msg)) {
        if ($flag_msg) {
          echo "<div class='alert alert-primary' role='alert'>$msg</div><br>"; 
        }
      }
    ?>
  </div>
</div>
</body>
</html>