<?php
$flag_msg = null;
$msg = "";

if (isset($_GET['enviar'])) // isset verifica se a variável foi iniciada
{ 
    $prestacao = $_GET["prestacao"];
    $pago = $_GET["pago"];
    $valor = $_GET["valor"];

    if (is_numeric($prestacao) && is_numeric($pago) && is_numeric($valor) && ($prestacao > 0) && ($pago >= 0) && ($valor > 0))
    {
        if ($prestacao > $pago)
        {
            $flag_msg = true;
            $npago = $prestacao - $pago;
            $divida = $valor * $npago;
            $msg = "Consórcio:<br />Saldo devedor atual: R$";
            $msg .= number_format($divida ,2,",",".");
            $msg .= "<br/>Quantidade de prestações sem pagar: ";
            $msg .= number_format($npago ,0);
        }
        elseif ($prestacao == $pago)
        {
            $flag_msg = true;
            $msg .= "Todas as suas parcelas estão QUITADAS!";
        }
        else
        {
            $flag_msg = false;
            $msg = "O número de parcelas pagas não pode ser maior que o total de parcelas.";
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
  <title>Exercício PHP 08</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Prestações</h1>
      <hr class="my-3">
      <p class="lead">Faça um programa que leia o número total de prestações de um consórcio, o total de prestações pagas e o valor atual da prestação. O programa deve calcular e apresentar o saldo devedor atual e a quantidade de prestações sem pagar.</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <div class="form-group col-md-3">
        <label for="prestacao">Número total de prestações:</label>
        <input type="text" class="form-control" id="prestacao" name="prestacao" required>
      </div>
      <div class="form-group col-md-3">
        <label for="pago">Total de prestações pagas:</label>
        <input type="text" class="form-control" id="pago" name="pago" required>
      </div>
      <div class="form-group col-md-3">
        <label for="valor">Valor atual da prestação:</label>
        <input type="text" class="form-control" id="valor" name="valor" required>
      </div>
      <br />
      <button type="submit" class="btn btn-success mb-2" name="enviar">Enviar</button>
      <a href="8.php"><button type="button" class="btn btn-primary mb-2" name="limpar">Limpar</button></a>
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