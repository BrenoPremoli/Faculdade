<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $branco = $_GET["branco"];
    $nulo = $_GET["nulo"];
    $valido = $_GET["valido"];

    if (is_numeric($branco) && is_numeric($nulo) && is_numeric($valido) && ($branco >= 0) && ($nulo >= 0) && ($valido >= 0))
    {
        $total = $branco + $nulo + $valido;
        if ($total > 0)
        {
            $flag_msg = true;
            $pbranco = ($branco / $total) * 100;
            $pnulo = ($nulo / $total) * 100;
            $pvalido = ($valido / $total) * 100;
            $msg = "Percentual de votos:<br />Válidos: ";
            $msg .= number_format($pvalido ,2);
            $msg .= "%<br/>Brancos: ";
            $msg .= number_format($pbranco ,2);
            $msg .= "%<br/>Nulos: ";
            $msg .= number_format($pnulo ,1,);
            $msg .= "%";
        }
        else
        {
            $flag_msg = false;
            $msg = "ELEIÇÃO SEM VOTOS";
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
  <title>Exercício PHP 07</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Votos</h1>
      <hr class="my-3">
      <p class="lead">Faça um programa para ler o número de votos brancos, nulos e válidos de uma eleição. Calcular e escrever o percentual que cada um representa em relação ao total de eleitores.</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <div class="form-group col-md-2">
        <label for="valido">Total de votos válidos:</label>
        <input type="text" class="form-control" id="valido" name="valido" required>
      </div>
      <div class="form-group col-md-2">
        <label for="branco">Total de votos brancos:</label>
        <input type="text" class="form-control" id="branco" name="branco" required>
      </div>
      <div class="form-group col-md-2">
        <label for="nulo">Total de votos nulos:</label>
        <input type="text" class="form-control" id="nulo" name="nulo" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="7.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
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