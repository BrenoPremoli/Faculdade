<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $valor = $_GET["valor"];
    $preco = $_GET["preco"];

    if (!empty($preco) && !empty($valor) && is_numeric($preco) && is_numeric($valor) && $preco >= 0 && $valor >= 0)
    {
        $troco = $valor - $preco;
        if ($troco >= 0)
        {
        $flag_msg = true;
        $msg = "Informações da compra:<br />Valor Pago: R$";
        $msg .= number_format($valor ,2,",",".");
        $msg .= "<br/>Preço da compra: R$";
        $msg .= number_format($preco ,2,",",".");
        $msg .= "<br/>Troco: R$";
        $msg .= number_format($troco ,2,",",".");
        }
        else
        {   
            $flag_msg = false;
            $msg .= "Compra Inválida. Valor pago deve ser maior ou igual preço do produto.";
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
  <title>Exercício PHP 01</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Troco</h1>
      <hr class="my-3">
      <p class="lead">Faça um programa que receba um valor pago, um segundo valor que é o preço do
    produto e retorne o troco a ser dado.</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <div class="form-group col-md-2">
        <label for="valor">Valor Pago:</label>
        <input type="text" class="form-control" id="valor" name="valor" required>
      </div>
      <br />
      <div class="form-group col-md-2">
        <label for="preco">Preço do Produto:</label>
        <input type="text" class="form-control" id="preco" name="preco" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="1.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
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