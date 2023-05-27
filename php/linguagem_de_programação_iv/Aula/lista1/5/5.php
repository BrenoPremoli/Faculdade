<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];

    if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3) && is_numeric($n4) && ($n1 >= 0) && ($n2 >= 0) && ($n3 >= 0) && ($n4 >= 0))
    {
        
        $media = ($n1 + $n2 + $n3 + $n1) / 4;
        if ($media >= 7)
        {
        $flag_msg = true;
        $msg = "Aluno APROVADO<br />Média: ";
        $msg .= number_format($media ,2);
        }
        else
        {
        $flag_msg = false;
        $msg = "Aluno REPROVADO<br />Média: ";
        $msg .= number_format($media ,2);   
        }
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
  <title>Exercício PHP 05</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Média de 4 notas</h1>
      <hr class="my-3">
      <p class="lead">Desenvolva um programa que receba quatro notas de um aluno, calcule e imprima a média aritmética das notas e a mensagem de aprovado para média superior ou igual a 7.0 ou a mensagem de reprovado para média inferior a 7.0. </p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <div class="form-group col-md-2">
        <label for="n1">Nota 1:</label>
        <input type="text" class="form-control" id="n1" name="n1" required>
      </div>
      <div class="form-group col-md-2">
        <label for="n2">Nota 2:</label>
        <input type="text" class="form-control" id="n2" name="n2" required>
      </div>
      <div class="form-group col-md-2">
        <label for="n3">Nota 3:</label>
        <input type="text" class="form-control" id="n3" name="n3" required>
      </div>
      <div class="form-group col-md-2">
        <label for="n4">Nota 4:</label>
        <input type="text" class="form-control" id="n4" name="n4" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="5.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
      <a  href="../index.html"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
    </form>
    <?php 
      if (!is_null($flag_msg)) {
        if ($flag_msg) {
          echo "<div class='alert alert-success' role='alert'>$msg</div><br>"; 
        }
        elseif (!is_null($flag_msg) && $flag_msg == false) {
            echo "<div class='alert alert-danger' role='alert'>$msg</div><br>"; 
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