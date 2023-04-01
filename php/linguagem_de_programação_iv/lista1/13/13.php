<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $peso = $_GET["peso"];
    $altura = $_GET["altura"];
    if (is_numeric($peso) && is_numeric($altura) && ($peso > 0) && ($altura > 0))
    {
      $imc = $peso / ($altura * $altura);
      $imc = number_format($imc ,2);
      $flag_msg = true;
      if ($imc < 18.5)
      {
          $msg = "IMC: {$imc}<br>";
          $msg .= "Classificação: MAGREZA<br>";
          $msg .= "Obesidade (Grau): 0";
      }
      elseif (($imc >= 18.5) && ($imc <= 24.9))
      {
        $msg = "IMC: {$imc}<br>";
        $msg .= "Classificação: NORMAL<br>";
        $msg .= "Obesidade (Grau): 0";
      }
      elseif (($imc >= 25) && ($imc <= 29.9))
      {
        $msg = "IMC: {$imc}<br>";
        $msg .= "Classificação: SOBREPESO<br>";
        $msg .= "Obesidade (Grau): I";
      }
      elseif (($imc >= 30) && ($imc <= 39.9))
      {
        $msg = "IMC: {$imc}<br>";
        $msg .= "Classificação: OBESIDADE<br>";
        $msg .= "Obesidade (Grau): II";
      }
      else
      {
        $msg = "IMC: {$imc}<br>";
        $msg .= "Classificação: 	OBESIDADE GRAVE<br>";
        $msg .= "Obesidade (Grau): III";
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
  <title>Exercício PHP 13</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
  <style>
  </style>
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">IMC</h1>
      <hr class="my-3">
      <p class="lead">Crie uma página em HTML com Bootstrap e PHP que calcule o IMC de uma pessoa. O formulário deve solicitar o peso e a altura da pessoa e calcular o valor do IMC. O resultado encontrado deve ser comparado com a tabela de IMCs e apresentar a situação que a pessoa se encontra. O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.</p>
      <table width="100%" cellspacing="50"><thead><tr><th class="has-text-align-center" data-align="center">Resultado IMC</th><th class="has-text-align-center" data-align="center">Classifica&ccedil;&atilde;o</th><th class="has-text-align-center" data-align="center">Grau de Obesidade</th></tr></thead><tbody><tr><td class="has-text-align-center" data-align="center">Menor que 18,5</td><td class="has-text-align-center" data-align="center">Magreza</td><td class="has-text-align-center" data-align="center">0</td></tr><tr><td class="has-text-align-center" data-align="center">Entre 18,5 e 24,9</td><td class="has-text-align-center" data-align="center">Normal</td><td class="has-text-align-center" data-align="center">0</td></tr><tr><td class="has-text-align-center" data-align="center">Entre 25 e 29,9</td><td class="has-text-align-center" data-align="center">Sobrepeso</td><td class="has-text-align-center" data-align="center">I</td></tr><tr><td class="has-text-align-center" data-align="center">Entre 30 e 39,9</td><td class="has-text-align-center" data-align="center">Obesidade</td><td class="has-text-align-center" data-align="center">II</td></tr><tr><td class="has-text-align-center" data-align="center">Maior que 40</td><td class="has-text-align-center" data-align="center">Obesidade grave</td><td class="has-text-align-center" data-align="center">III</td></tr></tbody></table>
    </div>
  </header>

  <div class="container">
    <form method="GET">
    <div class="form-group col-md-2">
        <label for="altura">Peso:</label>
        <input type="text" class="form-control" id="peso" name="peso" required>
      </div>
      <div class="form-group col-md-2">
        <label for="altura">Altura:</label>
        <input type="text" class="form-control" id="altura" name="altura" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="13.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
      <a  href="../index.html"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
    </form>
    <?php 
      if (!is_null($flag_msg)) {
        if ($flag_msg) {
          echo "<div class='alert alert-dark' role='alert'>$msg</div><br>"; 
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