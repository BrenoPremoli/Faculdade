<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $valor = $_GET["valor"];
    $quantidade = $_GET["quantidade"];

    if (!empty($quantidade) && !empty($valor) && is_numeric($quantidade) && is_numeric($valor) && $quantidade >= 0 && $valor >= 0)
    {
        $preco = $valor * $quantidade;
        $flag_msg = true;
        $msg = "Informações da compra:<br />Valor do Kg: R$";
        $msg .= number_format($valor ,2,",",".");
        $msg .= "<br/>Quantidade de Kg: ";
        $msg .= number_format($quantidade ,2,",",".");
        $msg .= "<br/>Preço: R$";
        $msg .= number_format($preco ,2,",",".");
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
  <title>Exercício PHP 02</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Quilo</h1>
      <hr class="my-3">
      <p class="lead">Faça um programa que receba o valor do quilo de um produto e a quantidade de quilos do produto consumida, calculando o valor final a ser pago.</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <div class="form-group col-md-2">
        <label for="valor">Valor do Kg:</label>
        <input type="text" class="form-control" id="valor" name="valor" required>
      </div>
      <br />
      <div class="form-group col-md-2">
        <label for="quantidade">Quantidade de Kg:</label>
        <input type="text" class="form-control" id="quantidade" name="quantidade" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="2.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
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