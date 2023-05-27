<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $p1 = $_GET["p1"];
    $p2 = $_GET["p2"];

    if (!empty($p1) && !empty($p2) && is_numeric($p1) && is_numeric($p2) && $p1 >= 0 && $p2 >= 0)
    {
        $nota = ($p1 + $p2) / 2;

        $flag_msg = true;
        $msg = "Cálculo efetuado com sucesso:<br />P1 = ";
        $msg .= number_format($p1, 2);
        $msg .= "<br />P2 = ";
        $msg .= number_format($p2, 2);
        $msg .= "<br />Média Final: ";
        $msg .= number_format($nota, 2);
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
  <title>Exercício PHP 01</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="p-4 mb-4 bg-light">
  <h1 class="display-5">Cálculo Média</h1>
  <hr class="my-3">
  <p class="lead">Esse exemplo calcula a média aritmética de duas provas.</p>
</div>

<div class="container">
  <form method="GET">
    <div class="form-group col-md-2">
      <label for="p1">P1:</label>
      <input type="text" class="form-control" id="p1" name="p1" required>
    </div>
    <br />
    <div class="form-group col-md-2">
      <label for="p2">P2:</label>
      <input type="text" class="form-control" id="p2" name="p2" required>
    </div>
    <br />
    <button type="submit" class="btn btn-primary mb-2" name="enviar">Enviar</button>
    <a href="exercicio01.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
  </form>
  <?php 
    if (!is_null($flag_msg)) {
      if ($flag_msg) {
        echo "<div class='alert alert-success' role='alert'>$msg</div>"; 
      }else{
        echo "<div class='alert alert-warning' role='alert'>$msg</div>"; 
      }
    }
  ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>