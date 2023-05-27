<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $inicial = $_GET["inicial"];
    $final = $_GET["final"];
    $litros = $_GET["litros"];
    $preco = $_GET["preco"];

    if (!empty($final) && !empty($litros) && !empty($preco) && is_numeric($inicial) && is_numeric($final) && is_numeric($litros) && is_numeric($preco) && ($inicial >= 0) && ($final > 0) && ($litros > 0) && ($preco > 0))
    {
        $distancia = $final - $inicial;
        if ($distancia > 0)
        {
        $gasto = $litros * $preco;
        $consumo = $distancia / $litros;
        $flag_msg = true;
        $msg = "Informações da corrida:<br />Distância Percorrida: ";
        $msg .= number_format($distancia ,1,);
        $msg .= " Km<br/>Valor gasto: R$";
        $msg .= number_format($gasto ,2,",",".");
        $msg .= "<br/>Consumo do Carro: ";
        $msg .= number_format($consumo ,1,);
        $msg .= " Km/L";
        }
        else
        {   
            $flag_msg = false;
            $msg .= "Dados Inválidos. Km Inicial deve ser menor que Km final.";
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
  <title>Exercício PHP 06</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Quilometragem</h1>
      <hr class="my-3">
      <p class="lead">Dadas as seguintes entradas: quilometragem inicial, quilometragem final, litros consumidos, preço do litro de combustível. Faça um programa que imprima o seguinte relatório: distância percorrida, valor total gasto e o consumo do carro (quantos quilômetros percorre com 1 litro de combustível).</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <div class="form-group col-md-2">
        <label for="inicial">Km inicial:</label>
        <input type="text" class="form-control" id="inicial" name="inicial" required>
      </div>
      <div class="form-group col-md-2">
        <label for="final">Km final:</label>
        <input type="text" class="form-control" id="final" name="final" required>
      </div>
      <div class="form-group col-md-2">
        <label for="litros ">Litros consumidos:</label>
        <input type="text" class="form-control" id="litros" name="litros" required>
      </div>
      <div class="form-group col-md-3">
        <label for="preço ">Preço do litro do combustível:</label>
        <input type="text" class="form-control" id="preço " name="preco" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="6.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
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