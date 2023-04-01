<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar']))
{ // isset verifica se a variável foi iniciada
$valor = 0;
$n = 15;
  while($n <= 200)
  {
    $flag_msg = true;
    $valor = $n * $n;
    $msg .= "{$n} ^ 2 = {$valor}<br>";
    $n++;
    $valor = 0;
  }
}
?>

<!doctype html>
<html lang="pr-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    form {
      text-align: center;
    }
  </style>
  <title>Exercício PHP 01</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Quadrados dos números inteiros (15 - 200)</h1>
      <hr class="my-3">
      <p class="lead">Apresentar os quadrados dos números inteiros de 15 a 200. (utilize while)</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <button type="submit" class="btn btn-success mb-5" name="enviar">Apresentar os quadrados dos números inteiros de 15 a 200</button><br>
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