<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $n = $_GET["n"];

    if (is_numeric($n))
    {
      $flag_msg = true;
      if ($n > 10)
      $msg = "O valor é MAIOR do que 10";
      elseif ($n == 10)
      $msg = "O valor é IGUAL a 10";
      else
      $msg = "O valor é MENOR do que 10";
    }
    else
    {
      $flag_msg = false;
      $msg = "Dados incorretos, preencha o formulário corretamente!";
    }
}
?>
<!doctype html>
<html lang="pr-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercício PHP 03</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Maior/Menor</h1>
      <hr class="my-3">
      <p class="lead">Desenvolva um programa que receba um valor digitado pelo usuário e imprima o texto "o valor é maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10".</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <div class="form-group col-md-2">
        <label for="n">Digite um número:</label>
        <input type="text" class="form-control" id="n" name="n" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="3.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
      <a  href="../index.html"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
    </form>
    <?php 
      if (!is_null($flag_msg)) {
        if ($flag_msg) {
          echo "<div class='alert alert-success' role='alert'>$msg</div><br>"; 
        }
        else{
          echo "<div class='alert alert-warning' role='alert'>$msg</div><br>"; 
        }
      }
    ?>
  </div>
</div>
</body>
</html>