<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $l1 = $_GET["l1"];
    $l2 = $_GET["l2"];
    $l3 = $_GET["l3"];

    if (is_numeric($l1) && is_numeric($l2) && is_numeric($l3) && ($l1 > 0) && ($l2 > 0) && ($l3 > 0))
    {
        if (($l1+$l2>$l3) && ($l1+$l3>$l2) && ($l2+$l3>$l1))
        {
            $flag_msg = true;
            if($l1==$l2 && $l2==$l3)
            $msg = "Triângulo EQUILÁTERO";
            elseif ($l1==$l2 || $l1==$l3 || $l2==$l3)
            $msg = "Triângulo ISÓSCELES";
            else
            $msg = "Triângulo ESCALENO";
        }
        else
        {
            $flag_msg = false;
            $msg = "NÃO é um triângulo";
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
  <title>Exercício PHP 09</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Triângulo</h1>
      <hr class="my-3">
      <p class="lead">Ler 3 valores para os lados de um triângulo, considerando lados como A, B, e C. Verificar se os valores dos lados fornecidos formam realmente um triângulo e, se for esta condição verdadeira, indicar qual o tipo de triângulo foi formado: isósceles, escaleno ou equilátero, caso os lados fornecidos não caracterizem um triângulo, avisar a ocorrência. Sabendo que:<br>- Triângulo é uma forma geométrica composta de 3 lados, sendo que cada lado é menor que a soma dos outros dois lados;<br>- Um triângulo é isósceles quando possui dois lados iguais e um diferente;<br>- um triângulo é equilátero quando possui todos os lados iguais;<br>- um triângulo é escaleno quando possui todos os lados diferentes.</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <div class="form-group col-md-3">
        <label for="l1">Lado 1:</label>
        <input type="text" class="form-control" id="l1" name="l1" required>
      </div>
      <div class="form-group col-md-3">
        <label for="l2">Lado 2:</label>
        <input type="text" class="form-control" id="l2" name="l2" required>
      </div>
      <div class="form-group col-md-3">
        <label for="l3">Lado 3:</label>
        <input type="text" class="form-control" id="l3" name="l3" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="9.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
      <a  href="../index.html"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
    </form>
    <?php 
      if (!is_null($flag_msg)) {
        if ($flag_msg) {
          echo "<div class='alert alert-success' role='alert'>$msg</div><br>"; 
        }else{
          echo "<div class='alert alert-warning' role='alert'>$msg</div><br>"; 
        }
      }
    ?>
  </div>
</div>
</body>
</html>