<?php
error_reporting(0);
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar']))
{
  $lista = [];
  $jogos = [];
  $total = 0;
  $flag_msg = true;
  while ($total < 10)
  {
    $cont = 0;
    while ($cont <= 6)
    {
      $num = rand(1, 60);
      if ($cont == 0 || in_array($num, $lista) == false)
      {
        $lista[$cont] = $num;
        $cont++;
      }
      if ($cont >= 6)
      {
        break;
      }
    }
    sort($lista);
    $lista = implode(', ', $lista);
    $jogos[$total] = $lista;
    unset($lista);
    $total++;
  }
  for ($x1 = 0; $x1 < 10; $x1++)
  {
    $jogo = $x1 + 1;
    $msg .= "Jogo $jogo -> ";
    $msg .= "$jogos[$x1]<br>";
  }
  $sorteio = [];
  $cont = 0;
  while ($cont <= 6)
  {
    $num = rand(1, 60);
    if ($cont == 0 || in_array($num, $sorteio) == false)
    {
      $sorteio[$cont] = $num;
      $cont++;
    }
    if ($cont >= 6)
    {
      break;
    }
  }
  sort($sorteio);
  $msg .= "SORTEIO OFICIAL -> ";
  foreach ($sorteio as $key => $val) 
  {
    $cont = 0;
    $msg .=  "$val | ";
  }
  $total = 0;
  for($cont_num = 0; $cont_num < 10; $cont_num++)
  {
    $total = 0;
    $lista = explode(',', $jogos[$cont_num]);
    while ($total <= 6)
    {
      if (in_array($sorteio[$total], $lista))
      {
        $cont++;
      }
      if ($cont >= 6)
      {
        break;
      }
      $total++;
    }
    if ($cont_num == 0)
    {
      $msg .= "<br>";
    }
    $jogo = $cont_num + 1;
    $msg .= "JOGO $jogo -> $cont Acertos<br>";
    $cont = 0;
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
  <title>Exercício PHP 08</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">MegaSena</h1>
      <hr class="my-3">
      <p class="lead">Crie um programa que armazene em um array 10 jogos da megasena, com 6 números inteiros cada (de 1 a 60) e em seguida crie um método que sorteie 6 dezenas e exiba a quantidade de acertos de cada jogo.</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <button type="submit" class="btn btn-success mb-5" name="enviar">Sortear 6 dezenas e exibir a quantidade de acertos de cada jogo</button><br>
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